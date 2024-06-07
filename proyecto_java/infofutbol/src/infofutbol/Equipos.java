package infofutbol;

import javax.swing.*;
import java.awt.EventQueue;
import java.awt.event.*;

public class Equipos extends JFrame {

    private static final long serialVersionUID = 1L;

    public Equipos() {
        setTitle("Selecciona tu equipo");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(800, 600);
        
        JPanel panelContenido = new JPanel();
        panelContenido.setLayout(null);
        
        JComboBox<String> comboBox = new JComboBox<>();
        comboBox.setModel(new DefaultComboBoxModel<>(new String[] {
            "¿Qué equipo quieres elegir?", "Almería", "Atleti", "Barça", "Betis", "Bilbao", 
            "Cádiz", "Celta", "Getafe", "Girona", "Granada", "Las Palmas", "Mallorca", "Osasuna", 
            "Rayo Vallecano", "Real Madrid", "Real Sociedad", "Sevilla", "Valencia", "Villarreal"
        }));
        comboBox.setBounds(315, 230, 203, 37);
        
        comboBox.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                String equipoSeleccionado = (String) comboBox.getSelectedItem();
                abrirVentanaEquipo(equipoSeleccionado);
            }
        });
        
        panelContenido.add(comboBox);
        setContentPane(panelContenido);
    }

    private void abrirVentanaEquipo(String nombreEquipo) {
        JFrame ventanaEquipo;

        switch (nombreEquipo) {

            case "Almería":
                ventanaEquipo = new Almeria();
                ventanaEquipo.setVisible(true);
                break;
            case "Atleti":
                ventanaEquipo = new Atleti();
                ventanaEquipo.setVisible(true);
                break;
            case "Barça":
                ventanaEquipo = new Barca();
                ventanaEquipo.setVisible(true);
                break;
            case "Betis":
                ventanaEquipo = new Betis();
                ventanaEquipo.setVisible(true);
                break;
            case "Bilbao":
                ventanaEquipo = new Bilbao();
                ventanaEquipo.setVisible(true);
                break;
            case "Cádiz":
                ventanaEquipo = new Cadiz();
                ventanaEquipo.setVisible(true);
                break;
            case "Celta":
                ventanaEquipo = new Celta();
                ventanaEquipo.setVisible(true);
                break;
            case "Getafe":
                ventanaEquipo = new Getafe();
                ventanaEquipo.setVisible(true);
                break;
            case "Girona":
                ventanaEquipo = new Girona();
                ventanaEquipo.setVisible(true);
                break;
            case "Granada":
                ventanaEquipo = new Granada();
                ventanaEquipo.setVisible(true);
                break;
            case "Las Palmas":
                ventanaEquipo = new LasPalmas();
                ventanaEquipo.setVisible(true);
                break;
            case "Mallorca":
                ventanaEquipo = new Mallorca();
                ventanaEquipo.setVisible(true);
                break;
            case "Osasuna":
                ventanaEquipo = new Osasuna();
                ventanaEquipo.setVisible(true);
                break;
            case "Rayo Vallecano":
                ventanaEquipo = new Rayo();
                ventanaEquipo.setVisible(true);
                break;
            case "Real Madrid":
                ventanaEquipo = new RealMadrid();
                ventanaEquipo.setVisible(true);
                break;
            case "Real Sociedad":
                ventanaEquipo = new RealSociedad();
                ventanaEquipo.setVisible(true);
                break;
            case "Sevilla":
                ventanaEquipo = new Sevilla();
                ventanaEquipo.setVisible(true);
                break;
            case "Valencia":
                ventanaEquipo = new Valencia();
                ventanaEquipo.setVisible(true);
                break;
            case "Villarreal":
                ventanaEquipo = new Villarreal();
                ventanaEquipo.setVisible(true);
                break;
            default:
                JOptionPane.showMessageDialog(this, "No se ha seleccionado un equipo válido.");
                return; 
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

