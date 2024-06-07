package infofutbol;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.ImageIcon;
import javax.swing.JComboBox;
import javax.swing.DefaultComboBoxModel;

public class Almeria extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Almeria frame = new Almeria();
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
	public Almeria() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 1022, 784);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/luisMaximiano.png")));
		lblNewLabel.setBounds(10, 11, 143, 136);
		contentPane.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/diegoMariño.png")));
		lblNewLabel_1.setBounds(189, 11, 143, 136);
		contentPane.add(lblNewLabel_1);
		
		JLabel lblNewLabel_1_1 = new JLabel("New label");
		lblNewLabel_1_1.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/alexCentelles.png")));
		lblNewLabel_1_1.setBounds(380, 11, 139, 136);
		contentPane.add(lblNewLabel_1_1);
		
		JLabel lblNewLabel_1_2 = new JLabel("New label");
		lblNewLabel_1_2.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/chumi.png")));
		lblNewLabel_1_2.setBounds(568, 11, 143, 136);
		contentPane.add(lblNewLabel_1_2);
		
		JLabel lblNewLabel_1_3 = new JLabel("New label");
		lblNewLabel_1_3.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/edgarGonzalez.png")));
		lblNewLabel_1_3.setBounds(753, 11, 143, 136);
		contentPane.add(lblNewLabel_1_3);
		
		JLabel lblNewLabel_1_4 = new JLabel("New label");
		lblNewLabel_1_4.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/cesarMontes.png")));
		lblNewLabel_1_4.setBounds(10, 180, 143, 144);
		contentPane.add(lblNewLabel_1_4);
		
		JLabel lblNewLabel_1_5 = new JLabel("New label");
		lblNewLabel_1_5.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/alexPozo.png")));
		lblNewLabel_1_5.setBounds(189, 180, 143, 144);
		contentPane.add(lblNewLabel_1_5);
		
		JLabel lblNewLabel_1_6 = new JLabel("New label");
		lblNewLabel_1_6.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/marcPubill.png")));
		lblNewLabel_1_6.setBounds(380, 180, 139, 144);
		contentPane.add(lblNewLabel_1_6);
		
		JLabel lblNewLabel_1_7 = new JLabel("New label");
		lblNewLabel_1_7.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/dionLopy.png")));
		lblNewLabel_1_7.setBounds(568, 180, 143, 144);
		contentPane.add(lblNewLabel_1_7);
		
		JLabel lblNewLabel_1_8 = new JLabel("New label");
		lblNewLabel_1_8.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/iddrisuBaba.png")));
		lblNewLabel_1_8.setBounds(753, 180, 143, 144);
		contentPane.add(lblNewLabel_1_8);
		
		JLabel lblNewLabel_1_9 = new JLabel("New label");
		lblNewLabel_1_9.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/gonzaloMelero.png")));
		lblNewLabel_1_9.setBounds(10, 365, 143, 144);
		contentPane.add(lblNewLabel_1_9);
		
		JLabel lblNewLabel_1_10 = new JLabel("New label");
		lblNewLabel_1_10.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/sergioArribas.png")));
		lblNewLabel_1_10.setBounds(189, 365, 143, 144);
		contentPane.add(lblNewLabel_1_10);
		
		JLabel lblNewLabel_1_11 = new JLabel("New label");
		lblNewLabel_1_11.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/adriEmbarba.png")));
		lblNewLabel_1_11.setBounds(380, 365, 139, 144);
		contentPane.add(lblNewLabel_1_11);
		
		JLabel lblNewLabel_1_12 = new JLabel("New label");
		lblNewLabel_1_12.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/largieRamazani.png")));
		lblNewLabel_1_12.setBounds(568, 365, 143, 144);
		contentPane.add(lblNewLabel_1_12);
		
		JLabel lblNewLabel_1_13 = new JLabel("New label");
		lblNewLabel_1_13.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/ibrahimaKone.png")));
		lblNewLabel_1_13.setBounds(753, 365, 143, 144);
		contentPane.add(lblNewLabel_1_13);
		
		JLabel lblNewLabel_1_9_1 = new JLabel("New label");
		lblNewLabel_1_9_1.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/leoBaptistao.png")));
		lblNewLabel_1_9_1.setBounds(10, 553, 143, 155);
		contentPane.add(lblNewLabel_1_9_1);
		
		JLabel lblNewLabel_1_9_2 = new JLabel("New label");
		lblNewLabel_1_9_2.setIcon(new ImageIcon(Almeria.class.getResource("/infofutbol/jugadores/almeria/marezi.png")));
		lblNewLabel_1_9_2.setBounds(189, 553, 143, 155);
		contentPane.add(lblNewLabel_1_9_2);
		
		JComboBox comboBox = new JComboBox();
		comboBox.setModel(new DefaultComboBoxModel(new String[] {"Luis Maximiano", "0 goles", "1 asistencia", "3 tarjetas amarillas", "1 tarjeta roja", "23 partidos jugados"}));
		comboBox.setBounds(10, 158, 143, 22);
		contentPane.add(comboBox);
		
		JComboBox comboBox_1 = new JComboBox();
		comboBox_1.setModel(new DefaultComboBoxModel(new String[] {"Diego Mariño", "0 goles", "0 asistencia", "1 tarjetas amarillas", "0 tarjeta roja", "9 partidos jugados"}));
		comboBox_1.setBounds(189, 158, 143, 22);
		contentPane.add(comboBox_1);
		
		JComboBox comboBox_2 = new JComboBox();
		comboBox_2.setModel(new DefaultComboBoxModel(new String[] {"Alex Centelles", "0 goles", "1 asistencia", "3 tarjetas amarillas", "1 tarjeta roja", "23 partidos jugados"}));
		comboBox_2.setBounds(380, 158, 143, 22);
		contentPane.add(comboBox_2);
		
		JComboBox comboBox_3 = new JComboBox();
		comboBox_3.setModel(new DefaultComboBoxModel(new String[] {"Chumi", "2 goles", "1 asistencia", "7 tarjetas amarillas", "1 tarjeta roja", "27 partidos jugados"}));
		comboBox_3.setBounds(568, 158, 143, 22);
		contentPane.add(comboBox_3);
		
		JComboBox comboBox_4 = new JComboBox();
		comboBox_4.setModel(new DefaultComboBoxModel(new String[] {"Edgar Gonzalez", "4 goles", "0 asistencia", "8 tarjetas amarillas", "2 tarjeta roja", "30 partidos jugados"}));
		comboBox_4.setBounds(753, 158, 143, 22);
		contentPane.add(comboBox_4);
		
		JComboBox comboBox_5 = new JComboBox();
		comboBox_5.setModel(new DefaultComboBoxModel(new String[] {"Iddrisu Baba", "0 goles", "3 asistencia", "8 tarjetas amarillas", "0 tarjeta roja", "22 partidos jugados"}));
		comboBox_5.setBounds(753, 332, 143, 22);
		contentPane.add(comboBox_5);
		
		JComboBox comboBox_6 = new JComboBox();
		comboBox_6.setModel(new DefaultComboBoxModel(new String[] {"Dion Lopy", "2 goles", "4 asistencia", "7 tarjetas amarillas", "2 tarjeta roja", "25 partidos jugados"}));
		comboBox_6.setBounds(568, 335, 143, 22);
		contentPane.add(comboBox_6);
		
		JComboBox comboBox_7 = new JComboBox();
		comboBox_7.setModel(new DefaultComboBoxModel(new String[] {"Marc Pubill", "0 goles", "3 asistencia", "3 tarjetas amarillas", "1 tarjeta roja", "29 partidos jugados"}));
		comboBox_7.setBounds(380, 335, 143, 22);
		contentPane.add(comboBox_7);
		
		JComboBox comboBox_8 = new JComboBox();
		comboBox_8.setModel(new DefaultComboBoxModel(new String[] {"Alex Pozo", "2 goles", "1 asistencia", "3 tarjetas amarillas", "1 tarjeta roja", "17 partidos jugados"}));
		comboBox_8.setBounds(189, 332, 143, 22);
		contentPane.add(comboBox_8);
		
		JComboBox comboBox_9 = new JComboBox();
		comboBox_9.setModel(new DefaultComboBoxModel(new String[] {"Cesar Montes", "1 goles", "0 asistencia", "3 tarjetas amarillas", "1 tarjeta roja", "20 partidos jugados"}));
		comboBox_9.setBounds(10, 335, 143, 22);
		contentPane.add(comboBox_9);
		
		JComboBox comboBox_10 = new JComboBox();
		comboBox_10.setModel(new DefaultComboBoxModel(new String[] {"Gonzalo Melero", "4 goles", "5 asistencia", "3 tarjetas amarillas", "0 tarjeta roja", "31 partidos jugados"}));
		comboBox_10.setBounds(10, 520, 143, 22);
		contentPane.add(comboBox_10);
		
		JComboBox comboBox_11 = new JComboBox();
		comboBox_11.setModel(new DefaultComboBoxModel(new String[] {"Sergio Arribas", "8 goles", "10 asistencia", "6 tarjetas amarillas", "1 tarjeta roja", "33 partidos jugados"}));
		comboBox_11.setBounds(189, 520, 143, 22);
		contentPane.add(comboBox_11);
		
		JComboBox comboBox_12 = new JComboBox();
		comboBox_12.setModel(new DefaultComboBoxModel(new String[] {"Adri Embarba", "6 goles", "5 asistencia", "2 tarjetas amarillas", "0 tarjeta roja", "27 partidos jugados"}));
		comboBox_12.setBounds(380, 520, 143, 22);
		contentPane.add(comboBox_12);
		
		JComboBox comboBox_13 = new JComboBox();
		comboBox_13.setModel(new DefaultComboBoxModel(new String[] {"Largie Ramazani", "7 goles", "2 asistencia", "2 tarjetas amarillas", "3 tarjeta roja", "27 partidos jugados"}));
		comboBox_13.setBounds(568, 520, 143, 22);
		contentPane.add(comboBox_13);
		
		JComboBox comboBox_14 = new JComboBox();
		comboBox_14.setModel(new DefaultComboBoxModel(new String[] {"Ibrahima Koné", "2 goles", "0 asistencia", "1 tarjetas amarillas", "0 tarjeta roja", "9 partidos jugados"}));
		comboBox_14.setBounds(753, 520, 143, 22);
		contentPane.add(comboBox_14);
		
		JComboBox comboBox_15 = new JComboBox();
		comboBox_15.setModel(new DefaultComboBoxModel(new String[] {"Leo Baptistao", "7 goles", "2 asistencia", "4 tarjetas amarillas", "0 tarjeta roja", "25 partidos jugados"}));
		comboBox_15.setBounds(10, 712, 143, 22);
		contentPane.add(comboBox_15);
		
		JComboBox comboBox_16 = new JComboBox();
		comboBox_16.setModel(new DefaultComboBoxModel(new String[] {"Marezi", "4 goles", "0 asistencia", "2 tarjetas amarillas", "0 tarjeta roja", "11 partidos jugados"}));
		comboBox_16.setBounds(189, 712, 143, 22);
		contentPane.add(comboBox_16);
	}
}
