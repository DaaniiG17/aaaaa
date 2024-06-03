package infofutbol;

import java.awt.EventQueue;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JComboBox;
import javax.swing.DefaultComboBoxModel;

public class LasPalmas extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					LasPalmas frame = new LasPalmas();
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
	public LasPalmas() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 1023, 808);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/aaronEscandell.png")));
		lblNewLabel.setBounds(49, 11, 141, 146);
		contentPane.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/alvaroValles.png")));
		lblNewLabel_1.setBounds(235, 11, 141, 146);
		contentPane.add(lblNewLabel_1);
		
		JLabel lblNewLabel_2 = new JLabel("New label");
		lblNewLabel_2.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/alexSuarez.png")));
		lblNewLabel_2.setBounds(420, 11, 141, 146);
		contentPane.add(lblNewLabel_2);
		
		JLabel lblNewLabel_3 = new JLabel("New label");
		lblNewLabel_3.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/alvaroLemos.png")));
		lblNewLabel_3.setBounds(624, 11, 141, 146);
		contentPane.add(lblNewLabel_3);
		
		JLabel lblNewLabel_4 = new JLabel("New label");
		lblNewLabel_4.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/daleySinkgraven.png")));
		lblNewLabel_4.setBounds(833, 11, 141, 146);
		contentPane.add(lblNewLabel_4);
		
		JLabel lblNewLabel_5 = new JLabel("New label");
		lblNewLabel_5.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/ericCurbelo.png")));
		lblNewLabel_5.setBounds(49, 195, 141, 146);
		contentPane.add(lblNewLabel_5);
		
		JLabel lblNewLabel_6 = new JLabel("New label");
		lblNewLabel_6.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/julianAraujo.png")));
		lblNewLabel_6.setBounds(235, 195, 141, 146);
		contentPane.add(lblNewLabel_6);
		
		JLabel lblNewLabel_7 = new JLabel("New label");
		lblNewLabel_7.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/mikaMarmol.png")));
		lblNewLabel_7.setBounds(420, 195, 141, 146);
		contentPane.add(lblNewLabel_7);
		
		JLabel lblNewLabel_8 = new JLabel("New label");
		lblNewLabel_8.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/saulCoco.png")));
		lblNewLabel_8.setBounds(624, 195, 141, 146);
		contentPane.add(lblNewLabel_8);
		
		JLabel lblNewLabel_9 = new JLabel("New label");
		lblNewLabel_9.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/sergiCardona.png")));
		lblNewLabel_9.setBounds(833, 195, 141, 146);
		contentPane.add(lblNewLabel_9);
		
		JLabel lblNewLabel_11 = new JLabel("New label");
		lblNewLabel_11.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/albertoMoleiro.png")));
		lblNewLabel_11.setBounds(49, 388, 141, 137);
		contentPane.add(lblNewLabel_11);
		
		JLabel lblNewLabel_12 = new JLabel("New label");
		lblNewLabel_12.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/enzoLoiodice.png")));
		lblNewLabel_12.setBounds(235, 388, 141, 137);
		contentPane.add(lblNewLabel_12);
		
		JLabel lblNewLabel_13 = new JLabel("New label");
		lblNewLabel_13.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/javiMuñoz.png")));
		lblNewLabel_13.setBounds(420, 388, 141, 137);
		contentPane.add(lblNewLabel_13);
		
		JLabel lblNewLabel_14 = new JLabel("New label");
		lblNewLabel_14.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/kirianRodriguez.png")));
		lblNewLabel_14.setBounds(624, 388, 141, 137);
		contentPane.add(lblNewLabel_14);
		
		JLabel lblNewLabel_15 = new JLabel("New label");
		lblNewLabel_15.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/marvinPark.png")));
		lblNewLabel_15.setBounds(833, 393, 141, 127);
		contentPane.add(lblNewLabel_15);
		
		JLabel lblNewLabel_16 = new JLabel("New label");
		lblNewLabel_16.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/cristianHerrera.png")));
		lblNewLabel_16.setBounds(49, 564, 141, 153);
		contentPane.add(lblNewLabel_16);
		
		JLabel lblNewLabel_17 = new JLabel("New label");
		lblNewLabel_17.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/munirElHaddadi.png")));
		lblNewLabel_17.setBounds(235, 564, 141, 153);
		contentPane.add(lblNewLabel_17);
		
		JLabel lblNewLabel_18 = new JLabel("New label");
		lblNewLabel_18.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/sandroRamirez.png")));
		lblNewLabel_18.setBounds(426, 564, 135, 153);
		contentPane.add(lblNewLabel_18);
		
		JLabel lblNewLabel_19 = new JLabel("New label");
		lblNewLabel_19.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/pejiño.png")));
		lblNewLabel_19.setBounds(624, 564, 141, 153);
		contentPane.add(lblNewLabel_19);
		
		JLabel lblNewLabel_20 = new JLabel("New label");
		lblNewLabel_20.setIcon(new ImageIcon(LasPalmas.class.getResource("/infofutbol/jugadores/LasPalmas/benitoRamirez.png")));
		lblNewLabel_20.setBounds(833, 572, 141, 137);
		contentPane.add(lblNewLabel_20);
		
		JComboBox comboBox = new JComboBox();
		comboBox.setModel(new DefaultComboBoxModel(new String[] {"Aaron Escandell", "0 goles", "0 asistencias", "2 tarjetas amarillas", "1 tarjeta roja", "3 partidos jugados"}));
		comboBox.setBounds(49, 168, 141, 22);
		contentPane.add(comboBox);
		
		JComboBox comboBox_1 = new JComboBox();
		comboBox_1.setModel(new DefaultComboBoxModel(new String[] {"Alvaro Valles", "0 goles", "0 asistencias", "3 tarjetas amarillas", "1 tarjeta roja", "29 partidos jugados"}));
		comboBox_1.setBounds(235, 168, 141, 22);
		contentPane.add(comboBox_1);
		
		JComboBox comboBox_2 = new JComboBox();
		comboBox_2.setModel(new DefaultComboBoxModel(new String[] {"Alex Suarez", "1 goles", "3 asistencias", "2 tarjetas amarillas", "0 tarjeta roja", "20 partidos jugados"}));
		comboBox_2.setBounds(420, 168, 141, 22);
		contentPane.add(comboBox_2);
		
		JComboBox comboBox_3 = new JComboBox();
		comboBox_3.setModel(new DefaultComboBoxModel(new String[] {"Alvaro Lemos", "0 goles", "0 asistencias", "1 tarjetas amarillas", "0 tarjeta roja", "3 partidos jugados"}));
		comboBox_3.setBounds(624, 168, 141, 22);
		contentPane.add(comboBox_3);
		
		JComboBox comboBox_4 = new JComboBox();
		comboBox_4.setModel(new DefaultComboBoxModel(new String[] {"Daley Sinkgraven", "0 goles", "0 asistencias", "3 tarjetas amarillas", "0 tarjeta roja", "11 partidos jugados"}));
		comboBox_4.setBounds(833, 168, 141, 22);
		contentPane.add(comboBox_4);
		
		JComboBox comboBox_5 = new JComboBox();
		comboBox_5.setModel(new DefaultComboBoxModel(new String[] {"Eric Curbelo", "0 goles", "0 asistencias", "0 tarjetas amarillas", "0 tarjeta roja", "2 partidos jugados"}));
		comboBox_5.setBounds(49, 352, 141, 22);
		contentPane.add(comboBox_5);
		
		JComboBox comboBox_6 = new JComboBox();
		comboBox_6.setModel(new DefaultComboBoxModel(new String[] {"Julian Araujo", "1 goles", "5 asistencias", "4 tarjetas amarillas", "0 tarjeta roja", "20 partidos jugados"}));
		comboBox_6.setBounds(235, 352, 141, 22);
		contentPane.add(comboBox_6);
		
		JComboBox comboBox_7 = new JComboBox();
		comboBox_7.setModel(new DefaultComboBoxModel(new String[] {"Mika Marmol", "3 goles", "1 asistencias", "8 tarjetas amarillas", "0 tarjeta roja", "27 partidos jugados"}));
		comboBox_7.setBounds(420, 352, 141, 22);
		contentPane.add(comboBox_7);
		
		JComboBox comboBox_8 = new JComboBox();
		comboBox_8.setModel(new DefaultComboBoxModel(new String[] {"Saul Coco", "1 goles", "2 asistencias", "7 tarjetas amarillas", "2 tarjeta roja", "25 partidos jugados"}));
		comboBox_8.setBounds(624, 352, 141, 22);
		contentPane.add(comboBox_8);
		
		JComboBox comboBox_9 = new JComboBox();
		comboBox_9.setModel(new DefaultComboBoxModel(new String[] {"Sergi Cardona", "1 goles", "5 asistencias", "6 tarjetas amarillas", "0 tarjeta roja", "26 partidos jugados"}));
		comboBox_9.setBounds(833, 352, 141, 22);
		contentPane.add(comboBox_9);
		
		JComboBox comboBox_10 = new JComboBox();
		comboBox_10.setModel(new DefaultComboBoxModel(new String[] {"Alberto Moleiro", "7 goles", "5 asistencias", "4 tarjetas amarillas", "0 tarjeta roja", "19 partidos jugados"}));
		comboBox_10.setBounds(49, 543, 141, 22);
		contentPane.add(comboBox_10);
		
		JComboBox comboBox_11 = new JComboBox();
		comboBox_11.setModel(new DefaultComboBoxModel(new String[] {"Enzo Loiodice", "2 goles", "4 asistencias", "6 tarjetas amarillas", "0 tarjeta roja", "25 partidos jugados"}));
		comboBox_11.setBounds(235, 543, 141, 22);
		contentPane.add(comboBox_11);
		
		JComboBox comboBox_12 = new JComboBox();
		comboBox_12.setModel(new DefaultComboBoxModel(new String[] {"Javi Muñoz", "5 goles", "2 asistencias", "4 tarjetas amarillas", "0 tarjeta roja", "19 partidos jugados"}));
		comboBox_12.setBounds(420, 543, 141, 22);
		contentPane.add(comboBox_12);
		
		JComboBox comboBox_13 = new JComboBox();
		comboBox_13.setModel(new DefaultComboBoxModel(new String[] {"Kirian Rodriguez", "7 goles", "9 asistencias", "3 tarjetas amarillas", "1 tarjeta roja", "30 partidos jugados"}));
		comboBox_13.setBounds(624, 543, 141, 22);
		contentPane.add(comboBox_13);
		
		JComboBox comboBox_14 = new JComboBox();
		comboBox_14.setModel(new DefaultComboBoxModel(new String[] {"Marvin Park", "2 goles", "4 asistencias", "5 tarjetas amarillas", "0 tarjeta roja", "23 partidos jugados"}));
		comboBox_14.setBounds(833, 539, 141, 22);
		contentPane.add(comboBox_14);
		
		JComboBox comboBox_14_1 = new JComboBox();
		comboBox_14_1.setModel(new DefaultComboBoxModel(new String[] {"Christian Herrera", "3 goles", "1 asistencias", "0 tarjetas amarillas", "0 tarjeta roja", "13 partidos jugados"}));
		comboBox_14_1.setBounds(49, 723, 141, 22);
		contentPane.add(comboBox_14_1);
		
		JComboBox comboBox_14_2 = new JComboBox();
		comboBox_14_2.setModel(new DefaultComboBoxModel(new String[] {"Munir El Haddadi", "8 goles", "2 asistencias", "6 tarjetas amarillas", "0 tarjeta roja", "25 partidos jugados"}));
		comboBox_14_2.setBounds(235, 723, 141, 22);
		contentPane.add(comboBox_14_2);
		
		JComboBox comboBox_14_3 = new JComboBox();
		comboBox_14_3.setModel(new DefaultComboBoxModel(new String[] {"Sandro Ramirez", "7 goles", "5 asistencias", "4 tarjetas amarillas", "1 tarjeta roja", "22 partidos jugados"}));
		comboBox_14_3.setBounds(420, 723, 141, 22);
		contentPane.add(comboBox_14_3);
		
		JComboBox comboBox_14_4 = new JComboBox();
		comboBox_14_4.setModel(new DefaultComboBoxModel(new String[] {"Pejiño", "0 goles", "0 asistencias", "1 tarjetas amarillas", "0 tarjeta roja", "4 partidos jugados"}));
		comboBox_14_4.setBounds(624, 723, 141, 22);
		contentPane.add(comboBox_14_4);
		
		JComboBox comboBox_14_5 = new JComboBox();
		comboBox_14_5.setModel(new DefaultComboBoxModel(new String[] {"Benito Ramirez", "2 goles", "0 asistencias", "0 tarjetas amarillas", "0 tarjeta roja", "8 partidos jugados"}));
		comboBox_14_5.setBounds(833, 723, 141, 22);
		contentPane.add(comboBox_14_5);
	}

}
