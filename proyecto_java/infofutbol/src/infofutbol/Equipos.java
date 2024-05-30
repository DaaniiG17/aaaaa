package infofutbol;

import javax.swing.*;

import java.awt.Desktop;
import java.awt.event.*;
import java.io.File;

public class Equipos {

    public static void main(String[] args) {
        JFrame frame = new JFrame("Selecciona tu equipo");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(800, 600);
        
        JPanel contentPane = new JPanel();
        contentPane.setLayout(null); // Usamos un layout nulo para poder usar setBounds
        
        JComboBox<String> comboBox = new JComboBox<>();
        comboBox.setModel(new DefaultComboBoxModel<>(new String[] {
            "Que equipo quieres elegir", "Alaves", "Almeria", "Atleti", "Barca", "Betis", "Bilbao", 
            "Cadiz", "Celta", "Getafe", "Girona", "Granada", "Las Palmas", "Mallorca", "Osasuna", 
            "Rayo Vallecano", "Real Madrid", "Real Sociedad", "Sevilla", "Valencia", "Villarreal"
        }));
        comboBox.setBounds(315, 230, 203, 37);
        
        comboBox.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                String selectedTeam = (String) comboBox.getSelectedItem();
                openTeamFile(selectedTeam);
            }
        });
        
        contentPane.add(comboBox);
        frame.setContentPane(contentPane);
        frame.setVisible(true);
    }

    private static void openTeamFile(String teamName) {
        // Ruta base del directorio de los archivos
        String basePath = "src/infofutbol/";

        // Ruta del archivo del equipo seleccionado
        String filePath;

        // Switch para determinar el archivo según el equipo seleccionado
        switch (teamName) {
            case "Alaves.java":
            case "Almeria.java":
            case "Atleti.java":
            case "Barca.java":
            case "Betis.java":
            case "Bilbao.java":
            case "Cadiz.java":
            case "Celta.java":
            case "Getafe.java":
            case "Girona.java":
            case "Granada.java":
            case "Las Palmas.java":
            case "Mallorca.java":
            case "Osasuna.java":
            case "Rayo Vallecano.java":
            case "Real Madrid.java":
            case "Real Sociedad.java":
            case "Sevilla.java":
            case "Valencia.java":
            case "Villarreal.java":
                filePath = basePath + teamName + ".java";
                break;
            default:
                JOptionPane.showMessageDialog(null, "No se ha seleccionado un equipo válido.");
                return; // Salir del método si no se selecciona un equipo válido
        }

        // Crear un objeto File con la ruta del archivo
        File file = new File(filePath);

        // Verificar si el archivo existe
        if (file.exists()) {
            try {
                // Abrir el archivo en el editor de código
                Desktop.getDesktop().open(file);
            } catch (Exception e) {
                e.printStackTrace();
                JOptionPane.showMessageDialog(null, "Error al abrir el archivo del equipo");
            }
        } else {
            JOptionPane.showMessageDialog(null, "El archivo del equipo no se ha encontrado.");
        }
    }

	public void setVisible(boolean b) {
		// TODO Auto-generated method stub
		
	}
}
