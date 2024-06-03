package infofutbol;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.ImageIcon;
import javax.swing.JComboBox;
import javax.swing.DefaultComboBoxModel;

public class Barca extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Barca frame = new Barca();
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
	public Barca() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 984, 815);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/marcTerStegen.png")));
		lblNewLabel.setBounds(20, 32, 141, 146);
		contentPane.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/iñakiPeña.png")));
		lblNewLabel_1.setBounds(204, 32, 141, 146);
		contentPane.add(lblNewLabel_1);
		
		JLabel lblNewLabel_2 = new JLabel("New label");
		lblNewLabel_2.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/alexBalde.png")));
		lblNewLabel_2.setBounds(391, 32, 141, 146);
		contentPane.add(lblNewLabel_2);
		
		JLabel lblNewLabel_3 = new JLabel("New label");
		lblNewLabel_3.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/joaoCancelo.png")));
		lblNewLabel_3.setBounds(578, 32, 141, 146);
		contentPane.add(lblNewLabel_3);
		
		JLabel lblNewLabel_4 = new JLabel("New label");
		lblNewLabel_4.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/andreasChristensen.png")));
		lblNewLabel_4.setBounds(771, 32, 141, 146);
		contentPane.add(lblNewLabel_4);
		
		JLabel lblNewLabel_5 = new JLabel("New label");
		lblNewLabel_5.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/iñigoMArtinez.png")));
		lblNewLabel_5.setBounds(20, 219, 141, 146);
		contentPane.add(lblNewLabel_5);
		
		JLabel lblNewLabel_6 = new JLabel("New label");
		lblNewLabel_6.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/julesKounde.png")));
		lblNewLabel_6.setBounds(204, 219, 141, 146);
		contentPane.add(lblNewLabel_6);
		
		JLabel lblNewLabel_7 = new JLabel("New label");
		lblNewLabel_7.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/ronaldAraujo.png")));
		lblNewLabel_7.setBounds(391, 219, 141, 146);
		contentPane.add(lblNewLabel_7);
		
		JLabel lblNewLabel_8 = new JLabel("New label");
		lblNewLabel_8.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/hectorFort.png")));
		lblNewLabel_8.setBounds(578, 219, 141, 146);
		contentPane.add(lblNewLabel_8);
		
		JLabel lblNewLabel_9 = new JLabel("New label");
		lblNewLabel_9.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/sergiRoberto.png")));
		lblNewLabel_9.setBounds(771, 219, 141, 146);
		contentPane.add(lblNewLabel_9);
		
		JLabel lblNewLabel_11 = new JLabel("New label");
		lblNewLabel_11.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/oriolRomeu.png")));
		lblNewLabel_11.setBounds(20, 410, 141, 137);
		contentPane.add(lblNewLabel_11);
		
		JLabel lblNewLabel_12 = new JLabel("New label");
		lblNewLabel_12.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/gavi.png")));
		lblNewLabel_12.setBounds(204, 410, 141, 137);
		contentPane.add(lblNewLabel_12);
		
		JLabel lblNewLabel_13 = new JLabel("New label");
		lblNewLabel_13.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/ferminLopez.png")));
		lblNewLabel_13.setBounds(391, 410, 141, 137);
		contentPane.add(lblNewLabel_13);
		
		JLabel lblNewLabel_14 = new JLabel("New label");
		lblNewLabel_14.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/frenkieDeJong.png")));
		lblNewLabel_14.setBounds(578, 410, 141, 137);
		contentPane.add(lblNewLabel_14);
		
		JLabel lblNewLabel_15 = new JLabel("New label");
		lblNewLabel_15.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/ilkayGundogan.png")));
		lblNewLabel_15.setBounds(771, 415, 141, 127);
		contentPane.add(lblNewLabel_15);
		
		JLabel lblNewLabel_16 = new JLabel("New label");
		lblNewLabel_16.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/pedri.png")));
		lblNewLabel_16.setBounds(20, 583, 141, 153);
		contentPane.add(lblNewLabel_16);
		
		JLabel lblNewLabel_17 = new JLabel("New label");
		lblNewLabel_17.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/ferranTorres.png")));
		lblNewLabel_17.setBounds(204, 583, 141, 153);
		contentPane.add(lblNewLabel_17);
		
		JLabel lblNewLabel_18 = new JLabel("New label");
		lblNewLabel_18.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/raphina.png")));
		lblNewLabel_18.setBounds(397, 583, 135, 153);
		contentPane.add(lblNewLabel_18);
		
		JLabel lblNewLabel_19 = new JLabel("New label");
		lblNewLabel_19.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/lamineYamal.png")));
		lblNewLabel_19.setBounds(578, 583, 141, 153);
		contentPane.add(lblNewLabel_19);
		
		JLabel lblNewLabel_20 = new JLabel("New label");
		lblNewLabel_20.setIcon(new ImageIcon(Barca.class.getResource("/infofutbol/jugadores/barca/robertLewandoski.png")));
		lblNewLabel_20.setBounds(771, 599, 141, 137);
		contentPane.add(lblNewLabel_20);
		
		JComboBox comboBox = new JComboBox();
		comboBox.setModel(new DefaultComboBoxModel(new String[] {"Marc Andre Ter-Stegen", "0 goles", "3 asistencias", "1 tarjetas amarilas", "0 tarjetas rojas", "22 partidos jugados"}));
		comboBox.setBounds(20, 186, 141, 22);
		contentPane.add(comboBox);
		
		JComboBox comboBox_1 = new JComboBox();
		comboBox_1.setModel(new DefaultComboBoxModel(new String[] {"Iñaki Peña", "0 goles", "0 asistencias", "2 tarjetas amarilas", "0 tarjetas rojas", "12 partidos jugados"}));
		comboBox_1.setBounds(204, 186, 141, 22);
		contentPane.add(comboBox_1);
		
		JComboBox comboBox_2 = new JComboBox();
		comboBox_2.setModel(new DefaultComboBoxModel(new String[] {"Alex Balde", "0 goles", "2 asistencias", "1 tarjetas amarilas", "0 tarjetas rojas", "7 partidos jugados"}));
		comboBox_2.setBounds(391, 186, 141, 22);
		contentPane.add(comboBox_2);
		
		JComboBox comboBox_3 = new JComboBox();
		comboBox_3.setModel(new DefaultComboBoxModel(new String[] {"Joao Cancelo", "3 goles", "7 asistencias", "4 tarjetas amarilas", "0 tarjetas rojas", "27 partidos jugados"}));
		comboBox_3.setBounds(578, 186, 141, 22);
		contentPane.add(comboBox_3);
		
		JComboBox comboBox_4 = new JComboBox();
		comboBox_4.setModel(new DefaultComboBoxModel(new String[] {"Andreas Christensen", "3 goles", "4 asistencias", "6 tarjetas amarilas", "1 tarjetas rojas", "23 partidos jugados"}));
		comboBox_4.setBounds(771, 186, 141, 22);
		contentPane.add(comboBox_4);
		
		JComboBox comboBox_5 = new JComboBox();
		comboBox_5.setModel(new DefaultComboBoxModel(new String[] {"Iñigo Martinez", "0 goles", "1 asistencias", "1 tarjetas amarilas", "0 tarjetas rojas", "7 partidos jugados"}));
		comboBox_5.setBounds(20, 376, 141, 22);
		contentPane.add(comboBox_5);
		
		JComboBox comboBox_6 = new JComboBox();
		comboBox_6.setModel(new DefaultComboBoxModel(new String[] {"Jules Kounde", "1 goles", "3 asistencias", "7 tarjetas amarilas", "0 tarjetas rojas", "24 partidos jugados"}));
		comboBox_6.setBounds(204, 377, 141, 22);
		contentPane.add(comboBox_6);
		
		JComboBox comboBox_7 = new JComboBox();
		comboBox_7.setModel(new DefaultComboBoxModel(new String[] {"Ronald Araujo", "1 gol", "1 asistencia", "6 tarjetas amarilas", "1 tarjetas rojas", "29 partidos jugados"}));
		comboBox_7.setBounds(391, 377, 141, 22);
		contentPane.add(comboBox_7);
		
		JComboBox comboBox_8 = new JComboBox();
		comboBox_8.setBounds(391, 377, 141, 22);
		contentPane.add(comboBox_8);
		
		JComboBox comboBox_9 = new JComboBox();
		comboBox_9.setModel(new DefaultComboBoxModel(new String[] {"Hector Fort", "0 goles", "3 asistencias", "2 tarjetas amarilas", "0 tarjetas rojas", "9 partidos jugados"}));
		comboBox_9.setBounds(578, 377, 141, 22);
		contentPane.add(comboBox_9);
		
		JComboBox comboBox_10 = new JComboBox();
		comboBox_10.setModel(new DefaultComboBoxModel(new String[] {"Sergi Roberto", "1 gol", "2 asistencias", "4 tarjetas amarilas", "0 tarjetas rojas", "10 partidos jugados"}));
		comboBox_10.setBounds(771, 376, 141, 22);
		contentPane.add(comboBox_10);
		
		JComboBox comboBox_11 = new JComboBox();
		comboBox_11.setModel(new DefaultComboBoxModel(new String[] {"Oriol Romeu", "0 goles", "0 asistencias", "4 tarjetas amarilas", "0 tarjetas rojas", "9 partidos jugados"}));
		comboBox_11.setBounds(20, 558, 141, 22);
		contentPane.add(comboBox_11);
		
		JComboBox comboBox_12 = new JComboBox();
		comboBox_12.setModel(new DefaultComboBoxModel(new String[] {"Gavi", "1 goles", "2 asistencias", "4 tarjetas amarilas", "0 tarjetas rojas", "12 partidos jugados"}));
		comboBox_12.setBounds(204, 558, 141, 22);
		contentPane.add(comboBox_12);
		
		JComboBox comboBox_13 = new JComboBox();
		comboBox_13.setModel(new DefaultComboBoxModel(new String[] {"Fermin Lopez", "6 goles", "2 asistencias", "4 tarjetas amarilas", "0 tarjetas rojas", "18 partidos jugados"}));
		comboBox_13.setBounds(391, 558, 141, 22);
		contentPane.add(comboBox_13);
		
		JComboBox comboBox_14 = new JComboBox();
		comboBox_14.setModel(new DefaultComboBoxModel(new String[] {"Frenkie De Jong", "4 goles", "6 asistencias", "3 tarjetas amarilas", "1 tarjetas rojas", "20 partidos jugados"}));
		comboBox_14.setBounds(578, 558, 141, 22);
		contentPane.add(comboBox_14);
		
		JComboBox comboBox_15 = new JComboBox();
		comboBox_15.setModel(new DefaultComboBoxModel(new String[] {"Ilkay Gundogan", "7 goles", "10 asistencias", "6 tarjetas amarilas", "0 tarjetas rojas", "29 partidos jugados"}));
		comboBox_15.setBounds(771, 553, 141, 22);
		contentPane.add(comboBox_15);
		
		JComboBox comboBox_16 = new JComboBox();
		comboBox_16.setModel(new DefaultComboBoxModel(new String[] {"Pedri", "6 goles", "6 asistencias", "5 tarjetas amarilas", "0 tarjetas rojas", "22 partidos jugados"}));
		comboBox_16.setBounds(20, 743, 141, 22);
		contentPane.add(comboBox_16);
		
		JComboBox comboBox_17 = new JComboBox();
		comboBox_17.setModel(new DefaultComboBoxModel(new String[] {"Ferran Torres", "7 goles", "4 asistencias", "2 tarjetas amarilas", "0 tarjetas rojas", "20 partidos jugados"}));
		comboBox_17.setBounds(204, 743, 141, 22);
		contentPane.add(comboBox_17);
		
		JComboBox comboBox_18 = new JComboBox();
		comboBox_18.setModel(new DefaultComboBoxModel(new String[] {"Raphina", "11goles", "7 asistencias", "6 tarjetas amarilas", "2 tarjetas rojas", "27 partidos jugados"}));
		comboBox_18.setBounds(391, 743, 141, 22);
		contentPane.add(comboBox_18);
		
		JComboBox comboBox_19 = new JComboBox();
		comboBox_19.setModel(new DefaultComboBoxModel(new String[] {"Lamine Yamal", "8 goles", "12 asistencias", "4 tarjetas amarilas", "0 tarjetas rojas", "25 partidos jugados"}));
		comboBox_19.setBounds(578, 743, 141, 22);
		contentPane.add(comboBox_19);
		
		JComboBox comboBox_20 = new JComboBox();
		comboBox_20.setModel(new DefaultComboBoxModel(new String[] {"Robert Lewandowski", "16 goles", "5 asistencias", "6 tarjetas amarilas", "1 tarjetas rojas", "30 partidos jugados"}));
		comboBox_20.setBounds(771, 743, 141, 22);
		contentPane.add(comboBox_20);
	}

}
