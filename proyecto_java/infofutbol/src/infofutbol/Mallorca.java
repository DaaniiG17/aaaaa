package infofutbol;

import java.awt.EventQueue;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

public class Mallorca extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Mallorca frame = new Mallorca();
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
	public Mallorca() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 1022, 784);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/dominikGreif.png")));
		lblNewLabel.setBounds(49, 11, 141, 146);
		contentPane.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/predragRajkovic.png")));
		lblNewLabel_1.setBounds(235, 11, 141, 146);
		contentPane.add(lblNewLabel_1);
		
		JLabel lblNewLabel_2 = new JLabel("New label");
		lblNewLabel_2.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/antonioRaillo.png")));
		lblNewLabel_2.setBounds(420, 11, 141, 146);
		contentPane.add(lblNewLabel_2);
		
		JLabel lblNewLabel_3 = new JLabel("New label");
		lblNewLabel_3.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/copete.png")));
		lblNewLabel_3.setBounds(624, 11, 141, 146);
		contentPane.add(lblNewLabel_3);
		
		JLabel lblNewLabel_4 = new JLabel("New label");
		lblNewLabel_4.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/giovanniGonzalez.png")));
		lblNewLabel_4.setBounds(833, 11, 141, 146);
		contentPane.add(lblNewLabel_4);
		
		JLabel lblNewLabel_5 = new JLabel("New label");
		lblNewLabel_5.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/jaumeCosta.png")));
		lblNewLabel_5.setBounds(49, 195, 141, 146);
		contentPane.add(lblNewLabel_5);
		
		JLabel lblNewLabel_6 = new JLabel("New label");
		lblNewLabel_6.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/martinValjent.png")));
		lblNewLabel_6.setBounds(235, 195, 141, 146);
		contentPane.add(lblNewLabel_6);
		
		JLabel lblNewLabel_7 = new JLabel("New label");
		lblNewLabel_7.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/matijaNastasic.png")));
		lblNewLabel_7.setBounds(420, 195, 141, 146);
		contentPane.add(lblNewLabel_7);
		
		JLabel lblNewLabel_8 = new JLabel("New label");
		lblNewLabel_8.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/pabloMaffeo.png")));
		lblNewLabel_8.setBounds(624, 195, 141, 146);
		contentPane.add(lblNewLabel_8);
		
		JLabel lblNewLabel_9 = new JLabel("New label");
		lblNewLabel_9.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/siebeVanDerHayden.png")));
		lblNewLabel_9.setBounds(833, 195, 141, 146);
		contentPane.add(lblNewLabel_9);
		
		JLabel lblNewLabel_11 = new JLabel("New label");
		lblNewLabel_11.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/toniLato.png")));
		lblNewLabel_11.setBounds(49, 388, 141, 137);
		contentPane.add(lblNewLabel_11);
		
		JLabel lblNewLabel_12 = new JLabel("New label");
		lblNewLabel_12.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/antonioSanchez.png")));
		lblNewLabel_12.setBounds(235, 388, 141, 137);
		contentPane.add(lblNewLabel_12);
		
		JLabel lblNewLabel_13 = new JLabel("New label");
		lblNewLabel_13.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/daniRodriguez.png")));
		lblNewLabel_13.setBounds(420, 388, 141, 137);
		contentPane.add(lblNewLabel_13);
		
		JLabel lblNewLabel_14 = new JLabel("New label");
		lblNewLabel_14.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/manuMorlanes.png")));
		lblNewLabel_14.setBounds(624, 388, 141, 137);
		contentPane.add(lblNewLabel_14);
		
		JLabel lblNewLabel_15 = new JLabel("New label");
		lblNewLabel_15.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/omarMascarell.png")));
		lblNewLabel_15.setBounds(833, 393, 141, 127);
		contentPane.add(lblNewLabel_15);
		
		JLabel lblNewLabel_16 = new JLabel("New label");
		lblNewLabel_16.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/samuCosta.png")));
		lblNewLabel_16.setBounds(49, 564, 141, 153);
		contentPane.add(lblNewLabel_16);
		
		JLabel lblNewLabel_17 = new JLabel("New label");
		lblNewLabel_17.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/sergiDarder.png")));
		lblNewLabel_17.setBounds(235, 564, 141, 153);
		contentPane.add(lblNewLabel_17);
		
		JLabel lblNewLabel_18 = new JLabel("New label");
		lblNewLabel_18.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/abdonPrats.png")));
		lblNewLabel_18.setBounds(426, 564, 135, 153);
		contentPane.add(lblNewLabel_18);
		
		JLabel lblNewLabel_19 = new JLabel("New label");
		lblNewLabel_19.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/cyleLarin.png")));
		lblNewLabel_19.setBounds(624, 564, 141, 153);
		contentPane.add(lblNewLabel_19);
		
		JLabel lblNewLabel_20 = new JLabel("New label");
		lblNewLabel_20.setIcon(new ImageIcon(Mallorca.class.getResource("/infofutbol/jugadores/mallorca/vedatMuriqi.png")));
		lblNewLabel_20.setBounds(833, 572, 141, 137);
		contentPane.add(lblNewLabel_20);
	}

}
