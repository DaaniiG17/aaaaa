package infofutbol;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.ImageIcon;

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
		setBounds(100, 100, 973, 799);
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
	}

}
