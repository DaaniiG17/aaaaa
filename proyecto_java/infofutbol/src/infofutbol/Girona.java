package infofutbol;

import java.awt.EventQueue;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JComboBox;
import javax.swing.DefaultComboBoxModel;

public class Girona extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Girona frame = new Girona();
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
	public Girona() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 1025, 799);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/pauloGazzaniga.png")));
		lblNewLabel.setBounds(49, 11, 141, 146);
		contentPane.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/juanCarlos.png")));
		lblNewLabel_1.setBounds(235, 11, 141, 146);
		contentPane.add(lblNewLabel_1);
		
		JLabel lblNewLabel_2 = new JLabel("New label");
		lblNewLabel_2.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/arnauMartinez.png")));
		lblNewLabel_2.setBounds(420, 11, 141, 146);
		contentPane.add(lblNewLabel_2);
		
		JLabel lblNewLabel_3 = new JLabel("New label");
		lblNewLabel_3.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/daleyBlind.png")));
		lblNewLabel_3.setBounds(624, 11, 141, 146);
		contentPane.add(lblNewLabel_3);
		
		JLabel lblNewLabel_4 = new JLabel("New label");
		lblNewLabel_4.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/davidLopez.png")));
		lblNewLabel_4.setBounds(833, 11, 141, 146);
		contentPane.add(lblNewLabel_4);
		
		JLabel lblNewLabel_5 = new JLabel("New label");
		lblNewLabel_5.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/juanpe.png")));
		lblNewLabel_5.setBounds(49, 195, 141, 146);
		contentPane.add(lblNewLabel_5);
		
		JLabel lblNewLabel_6 = new JLabel("New label");
		lblNewLabel_6.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/miguelGutierrez.png")));
		lblNewLabel_6.setBounds(235, 195, 141, 146);
		contentPane.add(lblNewLabel_6);
		
		JLabel lblNewLabel_7 = new JLabel("New label");
		lblNewLabel_7.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/yanCouto.png")));
		lblNewLabel_7.setBounds(420, 195, 141, 146);
		contentPane.add(lblNewLabel_7);
		
		JLabel lblNewLabel_8 = new JLabel("New label");
		lblNewLabel_8.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/valeryFernandez.png")));
		lblNewLabel_8.setBounds(624, 195, 141, 146);
		contentPane.add(lblNewLabel_8);
		
		JLabel lblNewLabel_9 = new JLabel("New label");
		lblNewLabel_9.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/aleixGarcia.png")));
		lblNewLabel_9.setBounds(833, 195, 141, 146);
		contentPane.add(lblNewLabel_9);
		
		JLabel lblNewLabel_11 = new JLabel("New label");
		lblNewLabel_11.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/borjaGarcia.png")));
		lblNewLabel_11.setBounds(49, 388, 141, 137);
		contentPane.add(lblNewLabel_11);
		
		JLabel lblNewLabel_12 = new JLabel("New label");
		lblNewLabel_12.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/ivanMartin.png")));
		lblNewLabel_12.setBounds(235, 388, 141, 137);
		contentPane.add(lblNewLabel_12);
		
		JLabel lblNewLabel_13 = new JLabel("New label");
		lblNewLabel_13.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/jhonSolis.png")));
		lblNewLabel_13.setBounds(420, 388, 141, 137);
		contentPane.add(lblNewLabel_13);
		
		JLabel lblNewLabel_14 = new JLabel("New label");
		lblNewLabel_14.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/pabloTorre.png")));
		lblNewLabel_14.setBounds(624, 388, 141, 137);
		contentPane.add(lblNewLabel_14);
		
		JLabel lblNewLabel_15 = new JLabel("New label");
		lblNewLabel_15.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/toniVilla.png")));
		lblNewLabel_15.setBounds(833, 393, 141, 137);
		contentPane.add(lblNewLabel_15);
		
		JLabel lblNewLabel_16 = new JLabel("New label");
		lblNewLabel_16.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/yangelHerrera.png")));
		lblNewLabel_16.setBounds(49, 564, 141, 153);
		contentPane.add(lblNewLabel_16);
		
		JLabel lblNewLabel_17 = new JLabel("New label");
		lblNewLabel_17.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/artemDovbyk.png")));
		lblNewLabel_17.setBounds(235, 564, 141, 153);
		contentPane.add(lblNewLabel_17);
		
		JLabel lblNewLabel_18 = new JLabel("New label");
		lblNewLabel_18.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/cristhianStuani.png")));
		lblNewLabel_18.setBounds(426, 564, 135, 153);
		contentPane.add(lblNewLabel_18);
		
		JLabel lblNewLabel_19 = new JLabel("New label");
		lblNewLabel_19.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/savio.png")));
		lblNewLabel_19.setBounds(624, 564, 141, 153);
		contentPane.add(lblNewLabel_19);
		
		JLabel lblNewLabel_20 = new JLabel("New label");
		lblNewLabel_20.setIcon(new ImageIcon(Girona.class.getResource("/infofutbol/jugadores/girona/viktorTsygankov.png")));
		lblNewLabel_20.setBounds(833, 572, 141, 137);
		contentPane.add(lblNewLabel_20);
		
		JComboBox comboBox = new JComboBox();
		comboBox.setModel(new DefaultComboBoxModel(new String[] {"Paulo Gazzaniga", "0 goles", "1 asistencia", "3 tarjetas amarillas", "0 tarjetas rojas", "33 partidos jugados"}));
		comboBox.setBounds(49, 168, 141, 22);
		contentPane.add(comboBox);
		
		JComboBox comboBox_1 = new JComboBox();
		comboBox_1.setModel(new DefaultComboBoxModel(new String[] {"Juan Carlos", "0 goles", "0 asistencia", "3 tarjetas amarillas", "0 tarjetas rojas", "1 partidos jugados"}));
		comboBox_1.setBounds(235, 168, 141, 22);
		contentPane.add(comboBox_1);
		
		JComboBox comboBox_2 = new JComboBox();
		comboBox_2.setModel(new DefaultComboBoxModel(new String[] {"Arnau Martinez", "1 gol", "7 asistencia", "5 tarjetas amarillas", "0 tarjetas rojas", "15 partidos jugados"}));
		comboBox_2.setBounds(420, 168, 141, 22);
		contentPane.add(comboBox_2);
		
		JComboBox comboBox_3 = new JComboBox();
		comboBox_3.setModel(new DefaultComboBoxModel(new String[] {"Daley Blind", "4 goles", "6 asistencia", "7 tarjetas amarillas", "1 tarjetas rojas", "27 partidos jugados"}));
		comboBox_3.setBounds(624, 168, 141, 22);
		contentPane.add(comboBox_3);
		
		JComboBox comboBox_4 = new JComboBox();
		comboBox_4.setModel(new DefaultComboBoxModel(new String[] {"David Lopez", "1 goles", "4 asistencia", "9 tarjetas amarillas", "0 tarjetas rojas", "20 partidos jugados"}));
		comboBox_4.setBounds(833, 168, 141, 22);
		contentPane.add(comboBox_4);
		
		JComboBox comboBox_5 = new JComboBox();
		comboBox_5.setModel(new DefaultComboBoxModel(new String[] {"Juanpe", "0 goles", "0 asistencia", "2 tarjetas amarillas", "0 tarjetas rojas", "7 partidos jugados"}));
		comboBox_5.setBounds(49, 355, 141, 22);
		contentPane.add(comboBox_5);
		
		JComboBox comboBox_6 = new JComboBox();
		comboBox_6.setModel(new DefaultComboBoxModel(new String[] {"Miguel Gutierrez", "3 goles", "10 asistencia", "6 tarjetas amarillas", "0 tarjetas rojas", "28 partidos jugados"}));
		comboBox_6.setBounds(235, 355, 141, 22);
		contentPane.add(comboBox_6);
		
		JComboBox comboBox_7 = new JComboBox();
		comboBox_7.setModel(new DefaultComboBoxModel(new String[] {"Yan Couto", "5 goles", "8 asistencia", "7 tarjetas amarillas", "1 tarjetas rojas", "26 partidos jugados"}));
		comboBox_7.setBounds(420, 355, 141, 22);
		contentPane.add(comboBox_7);
		
		JComboBox comboBox_8 = new JComboBox();
		comboBox_8.setModel(new DefaultComboBoxModel(new String[] {"Valery ", "0 goles", "2 asistencia", "4 tarjetas amarillas", "0 tarjetas rojas", "10 partidos jugados"}));
		comboBox_8.setBounds(624, 355, 141, 22);
		contentPane.add(comboBox_8);
		
		JComboBox comboBox_9 = new JComboBox();
		comboBox_9.setModel(new DefaultComboBoxModel(new String[] {"Aleix Garcia", "6 goles", "10 asistencia", "5 tarjetas amarillas", "0 tarjetas rojas", "27 partidos jugados"}));
		comboBox_9.setBounds(833, 352, 141, 22);
		contentPane.add(comboBox_9);
		
		JComboBox comboBox_10 = new JComboBox();
		comboBox_10.setModel(new DefaultComboBoxModel(new String[] {"Borja Garcia", "1 goles", "1 asistencia", "0 tarjetas amarillas", "0 tarjetas rojas", "7 partidos jugados"}));
		comboBox_10.setBounds(49, 536, 141, 22);
		contentPane.add(comboBox_10);
		
		JComboBox comboBox_11 = new JComboBox();
		comboBox_11.setModel(new DefaultComboBoxModel(new String[] {"Ivan Martin", "8 goles", "7 asistencia", "5 tarjetas amarillas", "0 tarjetas rojas", "29 partidos jugados"}));
		comboBox_11.setBounds(235, 536, 141, 22);
		contentPane.add(comboBox_11);
		
		JComboBox comboBox_12 = new JComboBox();
		comboBox_12.setModel(new DefaultComboBoxModel(new String[] {"John Solis", "0 goles", "2 asistencia", "1 tarjetas amarillas", "0 tarjetas rojas", "9 partidos jugados"}));
		comboBox_12.setBounds(420, 536, 141, 22);
		contentPane.add(comboBox_12);
		
		JComboBox comboBox_13 = new JComboBox();
		comboBox_13.setModel(new DefaultComboBoxModel(new String[] {"Pablo Torre", "3 goles", "4 asistencia", "2 tarjetas amarillas", "0 tarjetas rojas", "17 partidos jugados"}));
		comboBox_13.setBounds(624, 536, 141, 22);
		contentPane.add(comboBox_13);
		
		JComboBox comboBox_14 = new JComboBox();
		comboBox_14.setModel(new DefaultComboBoxModel(new String[] {"Toni Villa", "0 goles", "0 asistencia", "1 tarjetas amarillas", "0 tarjetas rojas", "5 partidos jugados"}));
		comboBox_14.setBounds(833, 536, 141, 22);
		contentPane.add(comboBox_14);
		
		JComboBox comboBox_15 = new JComboBox();
		comboBox_15.setModel(new DefaultComboBoxModel(new String[] {"Yangel Herrera", "5 goles", "4 asistencia", "7 tarjetas amarillas", "1 tarjetas rojas", "23 partidos jugados"}));
		comboBox_15.setBounds(49, 723, 141, 22);
		contentPane.add(comboBox_15);
		
		JComboBox comboBox_16 = new JComboBox();
		comboBox_16.setModel(new DefaultComboBoxModel(new String[] {"Artem Dovbyk", "20 goles", "5 asistencia", "5 tarjetas amarillas", "0 tarjetas rojas", "30 partidos jugados"}));
		comboBox_16.setBounds(235, 723, 141, 22);
		contentPane.add(comboBox_16);
		
		JComboBox comboBox_17 = new JComboBox();
		comboBox_17.setModel(new DefaultComboBoxModel(new String[] {"Christian Stuani", "7 goles", "1 asistencia", "2 tarjetas amarillas", "0 tarjetas rojas", "23 partidos jugados"}));
		comboBox_17.setBounds(420, 723, 141, 22);
		contentPane.add(comboBox_17);
		
		JComboBox comboBox_18 = new JComboBox();
		comboBox_18.setModel(new DefaultComboBoxModel(new String[] {"Savio", "16 goles", "10 asistencia", "5 tarjetas amarillas", "0 tarjetas rojas", "27 partidos jugados"}));
		comboBox_18.setBounds(624, 723, 141, 22);
		contentPane.add(comboBox_18);
		
		JComboBox comboBox_19 = new JComboBox();
		comboBox_19.setModel(new DefaultComboBoxModel(new String[] {"Viktor Tsygankov", "9 goles", "10 asistencia", "4 tarjetas amarillas", "1 tarjetas rojas", "25 partidos jugados"}));
		comboBox_19.setBounds(833, 723, 141, 22);
		contentPane.add(comboBox_19);
	}

}
