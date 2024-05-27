#include <iostream>
#include <graphics.h>
#include <conio.h>

const int screenWidth = 630;
const int screenHeight = 480;
const int buttonWidth = 100;
const int buttonHeight = 40;
const int buttonX = (screenWidth - buttonWidth) / 2;
const int buttonY = (screenHeight - buttonHeight) / 2;
const int alienWidth = 30;
const int alienHeight = 20;
const int alienSpeed = 3;
const int rowDistance = 20; // Distancia entre filas
const int numCols = 10; // Número de aliens por fila
const int numRows = 3; // Número de filas
const int shipWidth = 30; // Ancho de la nave
const int shipHeight = 15; // Alto de la nave
const int shipSpeed = 10; // Velocidad más rápida de la nave
const int shipDistanceFromBottom = 50; // Distancia de la nave desde la parte inferior de la pantalla
const int bulletSpeed = 10; // Velocidad de la bala
const int bulletWidth = 5; // Ancho de la bala
const int bulletHeight = 10; // Alto de la bala

struct Bullet {
    int x;
    int y;
    bool active;
};

struct Alien {
    int x;
    int y;
    bool active;
};

void drawButton() {
    setcolor(WHITE);
    rectangle(buttonX, buttonY, buttonX + buttonWidth, buttonY + buttonHeight);
    
    outtextxy(buttonX - 65, buttonY - 30, "BIENVENIDO AL SPACE INVADERS"); // Agregar texto
    outtextxy(buttonX + 33, buttonY + 12, "Jugar");
}

bool isInsideButton(int mouseX, int mouseY) {
    return (mouseX >= buttonX && mouseX <= buttonX + buttonWidth && mouseY >= buttonY && mouseY <= buttonY + buttonHeight);
}

void drawAlien(int x, int y) {
    setcolor(GREEN);
    rectangle(x, y, x + alienWidth, y + alienHeight);
}

void moveAliens(bool &movingRight, double &offsetX, double &offsetY, int &wallCollisionCount) {
    if (movingRight) {
        offsetX += alienSpeed;
        if (offsetX + numCols * (alienWidth + 15) - 15 >= screenWidth) {
            movingRight = false;
            wallCollisionCount++;
            if (wallCollisionCount == 2) {
                offsetY += alienHeight / 2;
                wallCollisionCount = 0;
            }
        }
    } else {
        offsetX -= alienSpeed;
        if (offsetX <= 0) {
            movingRight = true;
            wallCollisionCount++;
            if (wallCollisionCount == 2) {
                offsetY += alienHeight / 2;
                wallCollisionCount = 0;
            }
        }
    }
}

void drawAliens(Alien aliens[numRows][numCols], double offsetX, double offsetY) {
    for (int i = 0; i < numRows; ++i) {
        for (int j = 0; j < numCols; ++j) {
            if (aliens[i][j].active) {
                drawAlien(offsetX + j * (alienWidth + 15), offsetY + (i + 1) * rowDistance + i * alienHeight);
            }
        }
    }
}

void drawShip(int x, int y) {
    setcolor(RED);
    rectangle(x, y, x + shipWidth, y + shipHeight);
}

void moveShip(int &shipX, char input) {
    if (input == 75 && shipX - shipSpeed >= 0) { // Flecha izquierda
        shipX -= shipSpeed;
    } else if (input == 77 && shipX + shipWidth + shipSpeed <= screenWidth) { // Flecha derecha
        shipX += shipSpeed;
    }
}

void drawBullet(Bullet bullet) {
    if (bullet.active) {
        setcolor(YELLOW);
        rectangle(bullet.x, bullet.y, bullet.x + bulletWidth, bullet.y + bulletHeight);
    }
}

bool isCollision(int x1, int y1, int width1, int height1, int x2, int y2, int width2, int height2) {
    // Verifica si hay colisión entre dos rectángulos
    return (x1 < x2 + width2 && x1 + width1 > x2 && y1 < y2 + height2 && y1 + height1 > y2);
}

void moveBullet(Bullet &bullet, Alien aliens[numRows][numCols], double offsetX, double offsetY, int &score) {
    if (bullet.active) {
        bullet.y -= bulletSpeed; // Mueve la bala hacia arriba

        // Verificar colisión de la bala con los aliens en su nueva posición
        for (int i = 0; i < numRows; ++i) {
            for (int j = 0; j < numCols; ++j) {
                if (aliens[i][j].active) {
                    int alienX = offsetX + j * (alienWidth + 15); // Posición X actual del alien
                    int alienY = offsetY + (i + 1) * rowDistance + i * alienHeight; // Posición Y actual del alien
                    if (isCollision(bullet.x, bullet.y, bulletWidth, bulletHeight, alienX, alienY, alienWidth, alienHeight)) {
                        bullet.active = false; // Desactivar la bala
                        aliens[i][j].active = false; // Desactivar el alien golpeado
                        score += 50; // Incrementar el puntaje
                        return; // Salir de la función después de eliminar un alien
                    }
                }
            }
        }

        // Si la bala llega al borde superior sin golpear ningún alien, desactivarla
        if (bullet.y < 0) {
            bullet.active = false;
        }
    }
}

bool checkCollisionWithShip(Alien aliens[numRows][numCols], int shipX, int shipY, double offsetX, double offsetY) {
    for (int i = 0; i < numRows; ++i) {
        for (int j = 0; j < numCols; ++j) {
            if (aliens[i][j].active) {
                int alienX = offsetX + j * (alienWidth + 15);
                int alienY = offsetY + (i + 1) * rowDistance + i * alienHeight;
                if (isCollision(alienX, alienY, alienWidth, alienHeight, shipX, shipY, shipWidth, shipHeight)) {
                    return true;
                }
            }
        }
    }
    return false;
}

void drawScore(int score) {
    setcolor(WHITE);
    char scoreText[
    20];
    sprintf(scoreText, "Score: %d", score);
    outtextxy(screenWidth - 100, screenHeight - 20, scoreText);
}

void showEndGameMessage(bool win, int score) {
    int gd = DETECT, gm;
    initgraph(&gd, &gm, "");

    cleardevice();

    setcolor(WHITE);
    if (win) {
        outtextxy(screenWidth / 2 - 50, screenHeight / 2 - 20, "Has ganado!");
    } else {
        outtextxy(screenWidth / 2 - 50, screenHeight / 2 - 20, "Has perdido!");
    }

    char scoreText[20];
    sprintf(scoreText, "Puntuacion: %d", score);
    outtextxy(screenWidth / 2 - 50, screenHeight / 2 + 10, scoreText);

    delay(5000); // Espera 5 segundos antes de cerrar la ventana

    closegraph();
}

int main() {
    int gd = DETECT, gm;
    initgraph(&gd, &gm, "");

    bool buttonClicked = false;
    int score = 0; // Inicializar el puntaje

    // Pantalla inicial
    while (!buttonClicked) {
        cleardevice();
        drawButton();
        
        // Verificar si se hizo clic en el botón
        if (ismouseclick(WM_LBUTTONDOWN)) {
            int mouseX, mouseY;
            getmouseclick(WM_LBUTTONDOWN, mouseX, mouseY);
            if (isInsideButton(mouseX, mouseY)) {
                buttonClicked = true;
            }
        }

        delay(100);
    }

    // Iniciar juego
    bool movingRight = true;
    double offsetX = 0;
    double offsetY = 0;
    int wallCollisionCount = 0;
    int shipX = (screenWidth - shipWidth) / 2;
    int shipY = screenHeight - shipHeight - shipDistanceFromBottom;
    Bullet bullet = {0, 0, false};

    Alien aliens[numRows][numCols];

    // Inicializar naves alienígenas
    for (int i = 0; i < numRows; ++i) {
        for (int j = 0; j < numCols; ++j) {
            aliens[i][j].x = j * (alienWidth + 15);
            aliens[i][j].y = (i + 1) * rowDistance + i * alienHeight;
            aliens[i][j].active = true;
        }
    }

    // Iteraciones del juego
    while (true) {
        cleardevice();
        moveAliens(movingRight, offsetX, offsetY, wallCollisionCount);
        drawAliens(aliens, offsetX, offsetY);
        drawShip(shipX, shipY);
        drawBullet(bullet);
        moveBullet(bullet, aliens, offsetX, offsetY, score);
        drawScore(score); // Dibujar el puntaje

        if (checkCollisionWithShip(aliens, shipX, shipY, offsetX, offsetY)) {
            showEndGameMessage(false, score);
            break; // Terminar el programa si hay colisión con la nave
        }

        // Verificar si se eliminaron todas las naves alienígenas
        bool allAliensDestroyed = true;
        for (int i = 0; i < numRows; ++i) {
            for (int j = 0; j < numCols; ++j) {
                if (aliens[i][j].active) {
                    allAliensDestroyed = false;
                    break;
                }
            }
        }
        if (allAliensDestroyed) {
            showEndGameMessage(true, score);
            break;
        }

        if (kbhit()) {
            char key = getch();
            moveShip(shipX, key);
            if (key == 'd' && !bullet.active) {
                bullet.active = true;
                bullet.x = shipX + (shipWidth - bulletWidth) / 2;
                bullet.y = shipY - bulletHeight;
            }
        }

        delay(20);
    }

    closegraph();
    return 0;
}
