package infofutbol;

import javax.swing.*;
import java.awt.Desktop;
import java.awt.EventQueue;
import java.awt.event.*;
import java.io.File;

public class Equipos extends JFrame {

    private static final long serialVersionUID = 1L;

    public Equipos() {
        setTitle("Selecciona tu equipo");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(800, 600);
        
        JPanel contentPane = new JPanel();
        contentPane.setLayout(null);
        
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
        setContentPane(contentPane);
    }

    private void openTeamFile(String teamName) {
        String basePath = "src/infofutbol/";

        String filePath;

        switch (teamName) {
            case "Alaves":
            case "Almeria":
            case "Atleti":
            case "Barca":
            case "Betis":
            case "Bilbao":
            case "Cadiz":
            case "Celta":
            case "Getafe":
            case "Girona":
            case "Granada":
            case "Las Palmas":
            case "Mallorca":
            case "Osasuna":
            case "Rayo Vallecano":
            case "Real Madrid":
            case "Real Sociedad":
            case "Sevilla":
            case "Valencia":
            case "Villarreal":
                filePath = basePath + teamName + ".java";
                break;
            default:
                JOptionPane.showMessageDialog(null, "No se ha seleccionado un equipo válido.");
                return; 
        }

        File file = new File(filePath);

        if (file.exists()) {
            try {
                Desktop.getDesktop().open(file);
            } catch (Exception e) {
                e.printStackTrace();
                JOptionPane.showMessageDialog(null, "Error al abrir el archivo del equipo");
            }
        } else {
            JOptionPane.showMessageDialog(null, "El archivo del equipo no se ha encontrado.");
        }
    }

    public static void main(String[] args) {
        EventQueue.invokeLater(new Runnable() {
            public void run() {
                try {
                    Equipos frame = new Equipos();
                    frame.setVisible(true);
                } catch (Exception e) {
                    e.printStackTrace();
                }
            }
        });
    }
}
