package infofutbol;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.ImageIcon;
import javax.swing.JComboBox;
import javax.swing.DefaultComboBoxModel;

public class Atleti extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Atleti frame = new Atleti();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public Atleti() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 1030, 804);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JPanel contentPane_1 = new JPanel();
		contentPane_1.setLayout(null);
		contentPane_1.setBorder(new EmptyBorder(5, 5, 5, 5));
		contentPane_1.setBounds(0, 0, 957, 762);
		contentPane.add(contentPane_1);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/janOblak.png")));
		lblNewLabel.setBounds(32, 11, 141, 144);
		contentPane_1.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/antonioGomis.png")));
		lblNewLabel_1.setBounds(225, 11, 141, 144);
		contentPane_1.add(lblNewLabel_1);
		
		JLabel lblNewLabel_2 = new JLabel("New label");
		lblNewLabel_2.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/cesarAzpilicueta.png")));
		lblNewLabel_2.setBounds(422, 11, 141, 144);
		contentPane_1.add(lblNewLabel_2);
		
		JLabel lblNewLabel_3 = new JLabel("New label");
		lblNewLabel_3.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/joseGimenez.png")));
		lblNewLabel_3.setBounds(618, 11, 141, 144);
		contentPane_1.add(lblNewLabel_3);
		
		JLabel lblNewLabel_4 = new JLabel("New label");
		lblNewLabel_4.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/marioHermoso.png")));
		lblNewLabel_4.setBounds(796, 11, 141, 144);
		contentPane_1.add(lblNewLabel_4);
		
		JLabel lblNewLabel_5 = new JLabel("New label");
		lblNewLabel_5.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/stefanSavic.png")));
		lblNewLabel_5.setBounds(32, 181, 141, 144);
		contentPane_1.add(lblNewLabel_5);
		
		JLabel lblNewLabel_6 = new JLabel("New label");
		lblNewLabel_6.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/reinildo.png")));
		lblNewLabel_6.setBounds(225, 181, 141, 144);
		contentPane_1.add(lblNewLabel_6);
		
		JLabel lblNewLabel_7 = new JLabel("New label");
		lblNewLabel_7.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/nahuelMolina.png")));
		lblNewLabel_7.setBounds(422, 181, 141, 144);
		contentPane_1.add(lblNewLabel_7);
		
		JLabel lblNewLabel_8 = new JLabel("New label");
		lblNewLabel_8.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/marcosLlorente.png")));
		lblNewLabel_8.setBounds(618, 181, 141, 144);
		contentPane_1.add(lblNewLabel_8);
		
		JLabel lblNewLabel_9 = new JLabel("New label");
		lblNewLabel_9.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/koke.png")));
		lblNewLabel_9.setBounds(796, 181, 141, 144);
		contentPane_1.add(lblNewLabel_9);
		
		JLabel lblNewLabel_10 = new JLabel("New label");
		lblNewLabel_10.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/saulÑiguez.png")));
		lblNewLabel_10.setBounds(32, 391, 141, 144);
		contentPane_1.add(lblNewLabel_10);
		
		JLabel lblNewLabel_11 = new JLabel("New label");
		lblNewLabel_11.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/axelWitsel.png")));
		lblNewLabel_11.setBounds(225, 391, 141, 144);
		contentPane_1.add(lblNewLabel_11);
		
		JLabel lblNewLabel_12 = new JLabel("New label");
		lblNewLabel_12.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/pabloBarrios.png")));
		lblNewLabel_12.setBounds(422, 392, 141, 143);
		contentPane_1.add(lblNewLabel_12);
		
		JLabel lblNewLabel_13 = new JLabel("New label");
		lblNewLabel_13.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/rodrigoDePaul.png")));
		lblNewLabel_13.setBounds(618, 392, 141, 143);
		contentPane_1.add(lblNewLabel_13);
		
		JLabel lblNewLabel_14 = new JLabel("New label");
		lblNewLabel_14.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/rodrigoRiquelme.png")));
		lblNewLabel_14.setBounds(796, 391, 141, 144);
		contentPane_1.add(lblNewLabel_14);
		
		JLabel lblNewLabel_16 = new JLabel("New label");
		lblNewLabel_16.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/angelCorrea.png")));
		lblNewLabel_16.setBounds(32, 590, 141, 144);
		contentPane_1.add(lblNewLabel_16);
		
		JLabel lblNewLabel_17 = new JLabel("New label");
		lblNewLabel_17.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/antoineGrizzman.png")));
		lblNewLabel_17.setBounds(225, 590, 141, 144);
		contentPane_1.add(lblNewLabel_17);
		
		JLabel lblNewLabel_18 = new JLabel("New label");
		lblNewLabel_18.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/memphisDepay.png")));
		lblNewLabel_18.setBounds(434, 590, 141, 144);
		contentPane_1.add(lblNewLabel_18);
		
		JLabel lblNewLabel_19 = new JLabel("New label");
		lblNewLabel_19.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/samuLino.png")));
		lblNewLabel_19.setBounds(618, 590, 141, 144);
		contentPane_1.add(lblNewLabel_19);
		
		JLabel lblNewLabel_19_1 = new JLabel("New label");
		lblNewLabel_19_1.setIcon(new ImageIcon(Atleti.class.getResource("/infofutbol/jugadores/atleti/alvaroMorata.png")));
		lblNewLabel_19_1.setBounds(796, 590, 141, 144);
		contentPane_1.add(lblNewLabel_19_1);
		
		JComboBox comboBox = new JComboBox();
		comboBox.setModel(new DefaultComboBoxModel(new String[] {"Jan Oblak", "0 goles ", "0 asistencias", "3 tarjetas amarillas", "1 tarjeta roja", "34 partidos jugados"}));
		comboBox.setBounds(32, 162, 141, 22);
		contentPane_1.add(comboBox);
		
		JComboBox comboBox_1 = new JComboBox();
		comboBox_1.setModel(new DefaultComboBoxModel(new String[] {"Antonio Gomis", "0 goles ", "0 asistencias", "0 tarjetas amarillas", "0 tarjeta roja", "3 partidos jugados"}));
		comboBox_1.setBounds(225, 162, 141, 22);
		contentPane_1.add(comboBox_1);
		
		JComboBox comboBox_2 = new JComboBox();
		comboBox_2.setModel(new DefaultComboBoxModel(new String[] {"Cesar Azpilicueta", "0 goles ", "3 asistencias", "5 tarjetas amarillas", "0 tarjeta roja", "17 partidos jugados"}));
		comboBox_2.setBounds(422, 162, 141, 22);
		contentPane_1.add(comboBox_2);
		
		JComboBox comboBox_3 = new JComboBox();
		comboBox_3.setModel(new DefaultComboBoxModel(new String[] {"Jose Maria Gimenez", "2 goles ", "0 asistencias", "8 tarjetas amarillas", "1 tarjeta roja", "26 partidos jugados"}));
		comboBox_3.setBounds(618, 162, 141, 22);
		contentPane_1.add(comboBox_3);
		
		JComboBox comboBox_4 = new JComboBox();
		comboBox_4.setModel(new DefaultComboBoxModel(new String[] {"Mario Hermoso", "2 goles ", "2 asistencias", "7 tarjetas amarillas", "0 tarjeta roja", "19 partidos jugados"}));
		comboBox_4.setBounds(796, 162, 141, 22);
		contentPane_1.add(comboBox_4);
		
		JComboBox comboBox_5 = new JComboBox();
		comboBox_5.setModel(new DefaultComboBoxModel(new String[] {"Stefan Savic", "1 goles ", "0 asistencias", "12 tarjetas amarillas", "3 tarjeta roja", "24 partidos jugados"}));
		comboBox_5.setBounds(32, 336, 141, 22);
		contentPane_1.add(comboBox_5);
		
		JComboBox comboBox_6 = new JComboBox();
		comboBox_6.setModel(new DefaultComboBoxModel(new String[] {"Reinildo", "0 goles ", "2 asistencias", "5 tarjetas amarillas", "0 tarjeta roja", "11 partidos jugados"}));
		comboBox_6.setBounds(225, 336, 141, 22);
		contentPane_1.add(comboBox_6);
		
		JComboBox comboBox_7 = new JComboBox();
		comboBox_7.setModel(new DefaultComboBoxModel(new String[] {"Nahuel Molina", "1 goles ", "8 asistencias", "6 tarjetas amarillas", "0 tarjeta roja", "29 partidos jugados"}));
		comboBox_7.setBounds(422, 336, 141, 22);
		contentPane_1.add(comboBox_7);
		
		JComboBox comboBox_8 = new JComboBox();
		comboBox_8.setModel(new DefaultComboBoxModel(new String[] {"Marcos Llorente ", "5 goles ", "8 asistencias", "6 tarjetas amarillas", "1 tarjeta roja", "34 partidos jugados"}));
		comboBox_8.setBounds(618, 336, 141, 22);
		contentPane_1.add(comboBox_8);
		
		JComboBox comboBox_9 = new JComboBox();
		comboBox_9.setModel(new DefaultComboBoxModel(new String[] {"Koke", "2 goles ", "4 asistencias", "1 tarjetas amarillas", "0 tarjeta roja", "27 partidos jugados"}));
		comboBox_9.setBounds(796, 336, 141, 22);
		contentPane_1.add(comboBox_9);
		
		JComboBox comboBox_5_1 = new JComboBox();
		comboBox_5_1.setModel(new DefaultComboBoxModel(new String[] {"Saul Ñiguez", "3 goles ", "0 asistencias", "4 tarjetas amarillas", "0 tarjeta roja", "10 partidos jugados"}));
		comboBox_5_1.setBounds(32, 546, 141, 22);
		contentPane_1.add(comboBox_5_1);
		
		JComboBox comboBox_5_2 = new JComboBox();
		comboBox_5_2.setModel(new DefaultComboBoxModel(new String[] {"Axel Witsel", "1 goles ", "3 asistencias", "7 tarjetas amarillas", "1 tarjeta roja", "32 partidos jugados"}));
		comboBox_5_2.setBounds(225, 546, 141, 22);
		contentPane_1.add(comboBox_5_2);
		
		JComboBox comboBox_5_3 = new JComboBox();
		comboBox_5_3.setModel(new DefaultComboBoxModel(new String[] {"Pablo Barrios", "2 goles ", "2 asistencias", "3 tarjetas amarillas", "0 tarjeta roja", "15 partidos jugados"}));
		comboBox_5_3.setBounds(422, 546, 141, 22);
		contentPane_1.add(comboBox_5_3);
		
		JComboBox comboBox_5_4 = new JComboBox();
		comboBox_5_4.setModel(new DefaultComboBoxModel(new String[] {"Rodrigo De Paul", "0 goles ", "0 asistencias", "3 tarjetas amarillas", "1 tarjeta roja", "34 partidos jugados"}));
		comboBox_5_4.setBounds(618, 546, 141, 22);
		contentPane_1.add(comboBox_5_4);
		
		JComboBox comboBox_5_5 = new JComboBox();
		comboBox_5_5.setModel(new DefaultComboBoxModel(new String[] {"Rodrigo Riquelme", "1 goles ", "4 asistencias", "3 tarjetas amarillas", "0 tarjeta roja", "19 partidos jugados"}));
		comboBox_5_5.setBounds(796, 546, 141, 22);
		contentPane_1.add(comboBox_5_5);
		
		JComboBox comboBox_5_6 = new JComboBox();
		comboBox_5_6.setModel(new DefaultComboBoxModel(new String[] {"Angel Correa", "7 goles ", "4 asistencias", "4 tarjetas amarillas", "0 tarjeta roja", "26 partidos jugados"}));
		comboBox_5_6.setBounds(32, 740, 141, 22);
		contentPane_1.add(comboBox_5_6);
		
		JComboBox comboBox_5_7 = new JComboBox();
		comboBox_5_7.setModel(new DefaultComboBoxModel(new String[] {"Antoine Gierzmann", "14 goles ", "11 asistencias", "5 tarjetas amarillas", "1 tarjeta roja", "34 partidos jugados"}));
		comboBox_5_7.setBounds(225, 740, 141, 22);
		contentPane_1.add(comboBox_5_7);
		
		JComboBox comboBox_5_8 = new JComboBox();
		comboBox_5_8.setModel(new DefaultComboBoxModel(new String[] {"Memphis Depay", "5 goles ", "2 asistencias", "1 tarjeta amarilla", "0 tarjeta roja", "20 partidos jugados"}));
		comboBox_5_8.setBounds(422, 740, 141, 22);
		contentPane_1.add(comboBox_5_8);
		
		JComboBox comboBox_5_9 = new JComboBox();
		comboBox_5_9.setModel(new DefaultComboBoxModel(new String[] {"Samuel Lino", "9 goles ", "7 asistencias", "3 tarjetas amarillas", "0 tarjeta roja", "27 partidos jugados"}));
		comboBox_5_9.setBounds(618, 740, 141, 22);
		contentPane_1.add(comboBox_5_9);
		
		JComboBox comboBox_5_10 = new JComboBox();
		comboBox_5_10.setModel(new DefaultComboBoxModel(new String[] {"Alvaro Morata", "11 goles ", "3 asistencias", "6 tarjetas amarillas", "0 tarjeta roja", "32 partidos jugados"}));
		comboBox_5_10.setBounds(796, 740, 141, 22);
		contentPane_1.add(comboBox_5_10);
	}

}
