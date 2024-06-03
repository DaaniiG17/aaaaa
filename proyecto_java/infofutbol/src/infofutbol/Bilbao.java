package infofutbol;

import java.awt.EventQueue;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JComboBox;
import javax.swing.DefaultComboBoxModel;

public class Bilbao extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Bilbao frame = new Bilbao();
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
	public Bilbao() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 1022, 784);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/unaiSimon.png")));
		lblNewLabel.setBounds(49, 11, 141, 146);
		contentPane.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/julenAgirrezabala.png")));
		lblNewLabel_1.setBounds(235, 11, 141, 146);
		contentPane.add(lblNewLabel_1);
		
		JLabel lblNewLabel_2 = new JLabel("New label");
		lblNewLabel_2.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/aitorParedes.png")));
		lblNewLabel_2.setBounds(420, 11, 141, 146);
		contentPane.add(lblNewLabel_2);
		
		JLabel lblNewLabel_3 = new JLabel("New label");
		lblNewLabel_3.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/daniVivian.png")));
		lblNewLabel_3.setBounds(624, 11, 141, 146);
		contentPane.add(lblNewLabel_3);
		
		JLabel lblNewLabel_4 = new JLabel("New label");
		lblNewLabel_4.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/iñigoLekue.png")));
		lblNewLabel_4.setBounds(833, 11, 141, 146);
		contentPane.add(lblNewLabel_4);
		
		JLabel lblNewLabel_5 = new JLabel("New label");
		lblNewLabel_5.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/oscarDeMarcos.png")));
		lblNewLabel_5.setBounds(49, 195, 141, 146);
		contentPane.add(lblNewLabel_5);
		
		JLabel lblNewLabel_6 = new JLabel("New label");
		lblNewLabel_6.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/yerayAlvarez.png")));
		lblNewLabel_6.setBounds(235, 195, 141, 146);
		contentPane.add(lblNewLabel_6);
		
		JLabel lblNewLabel_7 = new JLabel("New label");
		lblNewLabel_7.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/yuriBerchiche.png")));
		lblNewLabel_7.setBounds(420, 195, 141, 146);
		contentPane.add(lblNewLabel_7);
		
		JLabel lblNewLabel_8 = new JLabel("New label");
		lblNewLabel_8.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/anderHerrera.png")));
		lblNewLabel_8.setBounds(624, 195, 141, 146);
		contentPane.add(lblNewLabel_8);
		
		JLabel lblNewLabel_9 = new JLabel("New label");
		lblNewLabel_9.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/beñatPrados.png")));
		lblNewLabel_9.setBounds(833, 195, 141, 146);
		contentPane.add(lblNewLabel_9);
		
		JLabel lblNewLabel_11 = new JLabel("New label");
		lblNewLabel_11.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/daniGarcia.png")));
		lblNewLabel_11.setBounds(49, 388, 141, 137);
		contentPane.add(lblNewLabel_11);
		
		JLabel lblNewLabel_12 = new JLabel("New label");
		lblNewLabel_12.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/ikerMuniain.png")));
		lblNewLabel_12.setBounds(235, 388, 141, 137);
		contentPane.add(lblNewLabel_12);
		
		JLabel lblNewLabel_13 = new JLabel("New label");
		lblNewLabel_13.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/mikelVesga.png")));
		lblNewLabel_13.setBounds(420, 388, 141, 137);
		contentPane.add(lblNewLabel_13);
		
		JLabel lblNewLabel_14 = new JLabel("New label");
		lblNewLabel_14.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/oihanSancet.png")));
		lblNewLabel_14.setBounds(624, 388, 141, 137);
		contentPane.add(lblNewLabel_14);
		
		JLabel lblNewLabel_15 = new JLabel("New label");
		lblNewLabel_15.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/raulGarcia.png")));
		lblNewLabel_15.setBounds(833, 393, 141, 127);
		contentPane.add(lblNewLabel_15);
		
		JLabel lblNewLabel_16 = new JLabel("New label");
		lblNewLabel_16.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/ruizDeGalarreta.png")));
		lblNewLabel_16.setBounds(49, 564, 141, 153);
		contentPane.add(lblNewLabel_16);
		
		JLabel lblNewLabel_17 = new JLabel("New label");
		lblNewLabel_17.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/alexBerenguer.png")));
		lblNewLabel_17.setBounds(235, 564, 141, 153);
		contentPane.add(lblNewLabel_17);
		
		JLabel lblNewLabel_18 = new JLabel("New label");
		lblNewLabel_18.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/nicoWilliams.png")));
		lblNewLabel_18.setBounds(426, 564, 135, 153);
		contentPane.add(lblNewLabel_18);
		
		JLabel lblNewLabel_19 = new JLabel("New label");
		lblNewLabel_19.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/iñakiWilliams.png")));
		lblNewLabel_19.setBounds(624, 564, 141, 153);
		contentPane.add(lblNewLabel_19);
		
		JLabel lblNewLabel_20 = new JLabel("New label");
		lblNewLabel_20.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/gorkaGuruzeta.png")));
		lblNewLabel_20.setBounds(833, 572, 141, 137);
		contentPane.add(lblNewLabel_20);
		
		JComboBox comboBox = new JComboBox();
		comboBox.setModel(new DefaultComboBoxModel(new String[] {"Unai Simon", "0 goles", "2 asistencias", "2 tarjetas amarillas", "0 tarjetas rojas", "29 partidos jugados"}));
		comboBox.setBounds(49, 162, 141, 22);
		contentPane.add(comboBox);
		
		JComboBox comboBox_1 = new JComboBox();
		comboBox_1.setModel(new DefaultComboBoxModel(new String[] {"Julen Agirrezabala", "0 goles", "0 asistencias", "0 tarjetas amarillas", "0 tarjetas rojas", "4 partidos jugados"}));
		comboBox_1.setBounds(235, 162, 141, 22);
		contentPane.add(comboBox_1);
		
		JComboBox comboBox_2 = new JComboBox();
		comboBox_2.setModel(new DefaultComboBoxModel(new String[] {"Aitor Paredes", "1 goles", "3 asistencias", "6 tarjetas amarillas", "0 tarjetas rojas", "26 partidos jugados"}));
		comboBox_2.setBounds(420, 162, 141, 22);
		contentPane.add(comboBox_2);
		
		JComboBox comboBox_3 = new JComboBox();
		comboBox_3.setModel(new DefaultComboBoxModel(new String[] {"Dani Vivian", "1 goles", "0 asistencias", "7 tarjetas amarillas", "1 tarjetas rojas", "27 partidos jugados"}));
		comboBox_3.setBounds(624, 162, 141, 22);
		contentPane.add(comboBox_3);
		
		JComboBox comboBox_4 = new JComboBox();
		comboBox_4.setModel(new DefaultComboBoxModel(new String[] {"Iñigo Lekue", "1 goles", "2 asistencias", "4 tarjetas amarillas", "0 tarjetas rojas", "11 partidos jugados"}));
		comboBox_4.setBounds(833, 162, 141, 22);
		contentPane.add(comboBox_4);
		
		JComboBox comboBox_5 = new JComboBox();
		comboBox_5.setModel(new DefaultComboBoxModel(new String[] {"Oscar De Marcos", "2 goles", "7 asistencias", "4 tarjetas amarillas", "0 tarjetas rojas", "25 partidos jugados"}));
		comboBox_5.setBounds(49, 355, 141, 22);
		contentPane.add(comboBox_5);
		
		JComboBox comboBox_6 = new JComboBox();
		comboBox_6.setModel(new DefaultComboBoxModel(new String[] {"Yeray Alvarez", "0 goles", "1 asistencias", "7 tarjetas amarillas", "1 tarjetas rojas", "19 partidos jugados"}));
		comboBox_6.setBounds(235, 355, 141, 22);
		contentPane.add(comboBox_6);
		
		JComboBox comboBox_7 = new JComboBox();
		comboBox_7.setModel(new DefaultComboBoxModel(new String[] {"Yuri Berchiche", "2 goles", "5 asistencias", "4 tarjetas amarillas", "0 tarjetas rojas", "23 partidos jugados"}));
		comboBox_7.setBounds(420, 355, 141, 22);
		contentPane.add(comboBox_7);
		
		JComboBox comboBox_8 = new JComboBox();
		comboBox_8.setModel(new DefaultComboBoxModel(new String[] {"Ander Herrera", "1 goles", "3 asistencias", "2 tarjetas amarillas", "0 tarjetas rojas", "14 partidos jugados"}));
		comboBox_8.setBounds(624, 355, 141, 22);
		contentPane.add(comboBox_8);
		
		JComboBox comboBox_8_1 = new JComboBox();
		comboBox_8_1.setModel(new DefaultComboBoxModel(new String[] {"Beñat Prados", "2 goles", "3 asistencias", "5 tarjetas amarillas", "0 tarjetas rojas", "20 partidos jugados"}));
		comboBox_8_1.setBounds(833, 352, 141, 22);
		contentPane.add(comboBox_8_1);
		
		JComboBox comboBox_8_2 = new JComboBox();
		comboBox_8_2.setModel(new DefaultComboBoxModel(new String[] {"Dani Garcia", "0 goles", "2 asistencias", "2 tarjetas amarillas", "0 tarjetas rojas", "10 partidos jugados"}));
		comboBox_8_2.setBounds(49, 536, 141, 22);
		contentPane.add(comboBox_8_2);
		
		JComboBox comboBox_8_3 = new JComboBox();
		comboBox_8_3.setModel(new DefaultComboBoxModel(new String[] {"Iker Muniain", "3 goles", "2 asistencias", "1 tarjetas amarillas", "0 tarjetas rojas", "20 partidos jugados"}));
		comboBox_8_3.setBounds(235, 536, 141, 22);
		contentPane.add(comboBox_8_3);
		
		JComboBox comboBox_8_4 = new JComboBox();
		comboBox_8_4.setModel(new DefaultComboBoxModel(new String[] {"Mikel Vesga", "2 goles", "5 asistencias", "1 tarjetas amarillas", "0 tarjetas rojas", "24 partidos jugados"}));
		comboBox_8_4.setBounds(420, 536, 141, 22);
		contentPane.add(comboBox_8_4);
		
		JComboBox comboBox_8_5 = new JComboBox();
		comboBox_8_5.setModel(new DefaultComboBoxModel(new String[] {"Oihan Sancet", "8 goles", "5 asistencias", "3 tarjetas amarillas", "0 tarjetas rojas", "27 partidos jugados"}));
		comboBox_8_5.setBounds(624, 536, 141, 22);
		contentPane.add(comboBox_8_5);
		
		JComboBox comboBox_8_6 = new JComboBox();
		comboBox_8_6.setModel(new DefaultComboBoxModel(new String[] {"Raul Garcia", "3 goles", "2 asistencias", "2 tarjetas amarillas", "0 tarjetas rojas", "15 partidos jugados"}));
		comboBox_8_6.setBounds(833, 531, 141, 22);
		contentPane.add(comboBox_8_6);
		
		JComboBox comboBox_8_7 = new JComboBox();
		comboBox_8_7.setModel(new DefaultComboBoxModel(new String[] {"Iñigo Ruiz De Galarreta", "1 goles", "4 asistencias", "6 tarjetas amarillas", "0 tarjetas rojas", "21 partidos jugados"}));
		comboBox_8_7.setBounds(49, 723, 141, 22);
		contentPane.add(comboBox_8_7);
		
		JComboBox comboBox_8_8 = new JComboBox();
		comboBox_8_8.setModel(new DefaultComboBoxModel(new String[] {"Alex Berenguer", "7 goles", "4 asistencias", "4 tarjetas amarillas", "0 tarjetas rojas", "24 partidos jugados"}));
		comboBox_8_8.setBounds(235, 723, 141, 22);
		contentPane.add(comboBox_8_8);
		
		JComboBox comboBox_8_9 = new JComboBox();
		comboBox_8_9.setModel(new DefaultComboBoxModel(new String[] {"Nico Williams", "11 goles", "8 asistencias", "4 tarjetas amarillas", "0 tarjetas rojas", "27 partidos jugados"}));
		comboBox_8_9.setBounds(420, 723, 141, 22);
		contentPane.add(comboBox_8_9);
		
		JComboBox comboBox_8_10 = new JComboBox();
		comboBox_8_10.setModel(new DefaultComboBoxModel(new String[] {"Iñali Williams", "11 goles", "10 asistencias", "6 tarjetas amarillas", "1 tarjetas rojas", "28 partidos jugados"}));
		comboBox_8_10.setBounds(624, 723, 141, 22);
		contentPane.add(comboBox_8_10);
		
		JComboBox comboBox_8_11 = new JComboBox();
		comboBox_8_11.setModel(new DefaultComboBoxModel(new String[] {"Gorka Guruzeta", "9 goles", "2 asistencias", "4 tarjetas amarillas", "0 tarjetas rojas", "25 partidos jugados"}));
		comboBox_8_11.setBounds(833, 720, 141, 22);
		contentPane.add(comboBox_8_11);
	}

}
