package infofutbol;

import java.awt.EventQueue;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JComboBox;
import javax.swing.DefaultComboBoxModel;

public class Getafe extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Getafe frame = new Getafe();
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
	public Getafe() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 1022, 798);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/davidSoria.png")));
		lblNewLabel.setBounds(49, 11, 141, 146);
		contentPane.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/danielFuzato.png")));
		lblNewLabel_1.setBounds(235, 11, 141, 146);
		contentPane.add(lblNewLabel_1);
		
		JLabel lblNewLabel_2 = new JLabel("New label");
		lblNewLabel_2.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/djeneDakoman.png")));
		lblNewLabel_2.setBounds(420, 11, 141, 146);
		contentPane.add(lblNewLabel_2);
		
		JLabel lblNewLabel_3 = new JLabel("New label");
		lblNewLabel_3.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/DomingosDuarte.png")));
		lblNewLabel_3.setBounds(624, 11, 141, 146);
		contentPane.add(lblNewLabel_3);
		
		JLabel lblNewLabel_4 = new JLabel("New label");
		lblNewLabel_4.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/fabrizioAngeleri.png")));
		lblNewLabel_4.setBounds(833, 11, 141, 146);
		contentPane.add(lblNewLabel_4);
		
		JLabel lblNewLabel_5 = new JLabel("New label");
		lblNewLabel_5.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/gastonAlvarez.png")));
		lblNewLabel_5.setBounds(49, 195, 141, 146);
		contentPane.add(lblNewLabel_5);
		
		JLabel lblNewLabel_6 = new JLabel("New label");
		lblNewLabel_6.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/joseCarmona.png")));
		lblNewLabel_6.setBounds(235, 195, 141, 146);
		contentPane.add(lblNewLabel_6);
		
		JLabel lblNewLabel_7 = new JLabel("New label");
		lblNewLabel_7.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/juanIglesias.png")));
		lblNewLabel_7.setBounds(420, 195, 141, 146);
		contentPane.add(lblNewLabel_7);
		
		JLabel lblNewLabel_8 = new JLabel("New label");
		lblNewLabel_8.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/omarAlderete.png")));
		lblNewLabel_8.setBounds(624, 195, 141, 146);
		contentPane.add(lblNewLabel_8);
		
		JLabel lblNewLabel_9 = new JLabel("New label");
		lblNewLabel_9.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/carlesAleña.png")));
		lblNewLabel_9.setBounds(833, 195, 141, 146);
		contentPane.add(lblNewLabel_9);
		
		JLabel lblNewLabel_11 = new JLabel("New label");
		lblNewLabel_11.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/gorkaRivera.png")));
		lblNewLabel_11.setBounds(49, 388, 141, 137);
		contentPane.add(lblNewLabel_11);
		
		JLabel lblNewLabel_12 = new JLabel("New label");
		lblNewLabel_12.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/johnPatrick.png")));
		lblNewLabel_12.setBounds(235, 388, 141, 137);
		contentPane.add(lblNewLabel_12);
		
		JLabel lblNewLabel_13 = new JLabel("New label");
		lblNewLabel_13.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/luisMilla.png")));
		lblNewLabel_13.setBounds(420, 388, 141, 137);
		contentPane.add(lblNewLabel_13);
		
		JLabel lblNewLabel_14 = new JLabel("New label");
		lblNewLabel_14.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/mauroArrambarri.png")));
		lblNewLabel_14.setBounds(624, 388, 141, 137);
		contentPane.add(lblNewLabel_14);
		
		JLabel lblNewLabel_15 = new JLabel("New label");
		lblNewLabel_15.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/nemanjaMaksimovic.png")));
		lblNewLabel_15.setBounds(833, 393, 141, 127);
		contentPane.add(lblNewLabel_15);
		
		JLabel lblNewLabel_16 = new JLabel("New label");
		lblNewLabel_16.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/oscarRodriguez.png")));
		lblNewLabel_16.setBounds(49, 564, 141, 153);
		contentPane.add(lblNewLabel_16);
		
		JLabel lblNewLabel_17 = new JLabel("New label");
		lblNewLabel_17.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/masonGreenwood.png")));
		lblNewLabel_17.setBounds(235, 564, 141, 153);
		contentPane.add(lblNewLabel_17);
		
		JLabel lblNewLabel_18 = new JLabel("New label");
		lblNewLabel_18.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/jaimeMata.png")));
		lblNewLabel_18.setBounds(420, 564, 135, 153);
		contentPane.add(lblNewLabel_18);
		
		JLabel lblNewLabel_19 = new JLabel("New label");
		lblNewLabel_19.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/juanmiLatasa.png")));
		lblNewLabel_19.setBounds(624, 564, 141, 153);
		contentPane.add(lblNewLabel_19);
		
		JLabel lblNewLabel_20 = new JLabel("New label");
		lblNewLabel_20.setIcon(new ImageIcon(Getafe.class.getResource("/infofutbol/jugadores/getafe/borjaMayoral.png")));
		lblNewLabel_20.setBounds(833, 572, 141, 137);
		contentPane.add(lblNewLabel_20);
		
		JComboBox comboBox = new JComboBox();
		comboBox.setModel(new DefaultComboBoxModel(new String[] {"David Soria", "0 goles", "0 asistencias", "3 tarjetas amarillas", "0 tarjetas rojas", "33 partidos jugados"}));
		comboBox.setBounds(49, 168, 141, 22);
		contentPane.add(comboBox);
		
		JComboBox comboBox_1 = new JComboBox();
		comboBox_1.setModel(new DefaultComboBoxModel(new String[] {"Daniel Fuzato", "0 goles", "0 asistencias", "0 tarjetas amarillas", "0 tarjetas rojas", "2 partidos jugados"}));
		comboBox_1.setBounds(235, 168, 141, 22);
		contentPane.add(comboBox_1);
		
		JComboBox comboBox_2 = new JComboBox();
		comboBox_2.setModel(new DefaultComboBoxModel(new String[] {"Djene Dakonam", "1 goles", "2 asistencias", "8 tarjetas amarillas", "1 tarjetas rojas", "25 partidos jugados"}));
		comboBox_2.setBounds(420, 168, 141, 22);
		contentPane.add(comboBox_2);
		
		JComboBox comboBox_3 = new JComboBox();
		comboBox_3.setModel(new DefaultComboBoxModel(new String[] {"Domingos Duarte", "0 goles", "2 asistencias", "4 tarjetas amarillas", "0 tarjetas rojas", "17 partidos jugados"}));
		comboBox_3.setBounds(624, 168, 141, 22);
		contentPane.add(comboBox_3);
		
		JComboBox comboBox_4 = new JComboBox();
		comboBox_4.setModel(new DefaultComboBoxModel(new String[] {"Fabrizio Angeleri", "0 goles", "2 asistencias", "4 tarjetas amarillas", "0 tarjetas rojas", "12 partidos jugados"}));
		comboBox_4.setBounds(833, 168, 141, 22);
		contentPane.add(comboBox_4);
		
		JComboBox comboBox_5 = new JComboBox();
		comboBox_5.setModel(new DefaultComboBoxModel(new String[] {"Gaston Alvarez", "0 goles", "1 asistencias", "6 tarjetas amarillas", "1 tarjetas rojas", "24 partidos jugados"}));
		comboBox_5.setBounds(49, 352, 141, 22);
		contentPane.add(comboBox_5);
		
		JComboBox comboBox_6 = new JComboBox();
		comboBox_6.setModel(new DefaultComboBoxModel(new String[] {"Jose Carmona", "1 goles", "3 asistencias", "3 tarjetas amarillas", "0 tarjetas rojas", "16 partidos jugados"}));
		comboBox_6.setBounds(235, 352, 141, 22);
		contentPane.add(comboBox_6);
		
		JComboBox comboBox_7 = new JComboBox();
		comboBox_7.setModel(new DefaultComboBoxModel(new String[] {"Juan Iglesias", "0 goles", "2 asistencias", "5 tarjetas amarillas", "0 tarjetas rojas", "16 partidos jugados"}));
		comboBox_7.setBounds(420, 352, 141, 22);
		contentPane.add(comboBox_7);
		
		JComboBox comboBox_8 = new JComboBox();
		comboBox_8.setModel(new DefaultComboBoxModel(new String[] {"Omar Alderete", "1 goles", "0 asistencias", "7 tarjetas amarillas", "2 tarjetas rojas", "25 partidos jugados"}));
		comboBox_8.setBounds(624, 352, 141, 22);
		contentPane.add(comboBox_8);
		
		JComboBox comboBox_9 = new JComboBox();
		comboBox_9.setModel(new DefaultComboBoxModel(new String[] {"Carles Aleña", "2 goles", "0 asistencias", "4 tarjetas amarillas", "0 tarjetas rojas", "14 partidos jugados"}));
		comboBox_9.setBounds(833, 352, 141, 22);
		contentPane.add(comboBox_9);
		
		JComboBox comboBox_10 = new JComboBox();
		comboBox_10.setModel(new DefaultComboBoxModel(new String[] {"Gorka Rivera", "0 goles", "0 asistencias", "1 tarjetas amarillas", "0 tarjetas rojas", "3 partidos jugados"}));
		comboBox_10.setBounds(49, 536, 141, 22);
		contentPane.add(comboBox_10);
		
		JComboBox comboBox_11 = new JComboBox();
		comboBox_11.setModel(new DefaultComboBoxModel(new String[] {"John Patrick", "0 goles", "1 asistencias", "0 tarjetas amarillas", "0 tarjetas rojas", "4 partidos jugados"}));
		comboBox_11.setBounds(235, 536, 141, 22);
		contentPane.add(comboBox_11);
		
		JComboBox comboBox_12 = new JComboBox();
		comboBox_12.setModel(new DefaultComboBoxModel(new String[] {"Luis Milla", "2 goles", "5 asistencias", "3 tarjetas amarillas", "0 tarjetas rojas", "25 partidos jugados"}));
		comboBox_12.setBounds(420, 536, 141, 22);
		contentPane.add(comboBox_12);
		
		JComboBox comboBox_13 = new JComboBox();
		comboBox_13.setModel(new DefaultComboBoxModel(new String[] {"Mauro Arambarri", "5 goles", "2 asistencias", "7 tarjetas amarillas", "0 tarjetas rojas", "26 partidos jugados"}));
		comboBox_13.setBounds(624, 536, 141, 22);
		contentPane.add(comboBox_13);
		
		JComboBox comboBox_14 = new JComboBox();
		comboBox_14.setModel(new DefaultComboBoxModel(new String[] {"Nemanja Maksimovic", "7 goles", "6 asistencias", "8 tarjetas amarillas", "0 tarjetas rojas", "32 partidos jugados"}));
		comboBox_14.setBounds(833, 531, 141, 22);
		contentPane.add(comboBox_14);
		
		JComboBox comboBox_15 = new JComboBox();
		comboBox_15.setModel(new DefaultComboBoxModel(new String[] {"Oscar Rodriguez", "3 goles", "6 asistencias", "1 tarjetas amarillas", "0 tarjetas rojas", "23 partidos jugados"}));
		comboBox_15.setBounds(49, 723, 141, 22);
		contentPane.add(comboBox_15);
		
		JComboBox comboBox_16 = new JComboBox();
		comboBox_16.setModel(new DefaultComboBoxModel(new String[] {"Mason Greenwood", "12 goles", "8 asistencias", "5 tarjetas amarillas", "1 tarjetas rojas", "29 partidos jugados"}));
		comboBox_16.setBounds(235, 723, 141, 22);
		contentPane.add(comboBox_16);
		
		JComboBox comboBox_17 = new JComboBox();
		comboBox_17.setModel(new DefaultComboBoxModel(new String[] {"Jaime Mata", "7 goles", "3 asistencias", "7 tarjetas amarillas", "0 tarjetas rojas", "20 partidos jugados"}));
		comboBox_17.setBounds(420, 723, 141, 22);
		contentPane.add(comboBox_17);
		
		JComboBox comboBox_18 = new JComboBox();
		comboBox_18.setModel(new DefaultComboBoxModel(new String[] {"Juanmi Latasa", "1 goles", "0 asistencias", "2 tarjetas amarillas", "0 tarjetas rojas", "9 partidos jugados"}));
		comboBox_18.setBounds(624, 723, 141, 22);
		contentPane.add(comboBox_18);
		
		JComboBox comboBox_19 = new JComboBox();
		comboBox_19.setModel(new DefaultComboBoxModel(new String[] {"Borja Mayoral", "14 goles", "5 asistencias", "6 tarjetas amarillas", "0 tarjetas rojas", "25 partidos jugados"}));
		comboBox_19.setBounds(833, 720, 141, 22);
		contentPane.add(comboBox_19);
	}

}
