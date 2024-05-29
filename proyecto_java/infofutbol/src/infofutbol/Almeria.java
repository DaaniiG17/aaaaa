package infofutbol;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.ImageIcon;

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
					Alaves frame = new Alaves();
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
		lblNewLabel.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/luisMaximiano.png")));
		lblNewLabel.setBounds(10, 11, 143, 136);
		contentPane.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/diegoMariño.png")));
		lblNewLabel_1.setBounds(189, 11, 143, 136);
		contentPane.add(lblNewLabel_1);
		
		JLabel lblNewLabel_1_1 = new JLabel("New label");
		lblNewLabel_1_1.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/alexCentelles.png")));
		lblNewLabel_1_1.setBounds(380, 11, 139, 136);
		contentPane.add(lblNewLabel_1_1);
		
		JLabel lblNewLabel_1_2 = new JLabel("New label");
		lblNewLabel_1_2.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/chumi.png")));
		lblNewLabel_1_2.setBounds(568, 11, 143, 136);
		contentPane.add(lblNewLabel_1_2);
		
		JLabel lblNewLabel_1_3 = new JLabel("New label");
		lblNewLabel_1_3.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/edgarGonzalez.png")));
		lblNewLabel_1_3.setBounds(753, 11, 143, 136);
		contentPane.add(lblNewLabel_1_3);
		
		JLabel lblNewLabel_1_4 = new JLabel("New label");
		lblNewLabel_1_4.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/cesarMontes.png")));
		lblNewLabel_1_4.setBounds(10, 180, 143, 144);
		contentPane.add(lblNewLabel_1_4);
		
		JLabel lblNewLabel_1_5 = new JLabel("New label");
		lblNewLabel_1_5.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/alexPozo.png")));
		lblNewLabel_1_5.setBounds(189, 180, 143, 144);
		contentPane.add(lblNewLabel_1_5);
		
		JLabel lblNewLabel_1_6 = new JLabel("New label");
		lblNewLabel_1_6.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/marcPubill.png")));
		lblNewLabel_1_6.setBounds(380, 180, 139, 144);
		contentPane.add(lblNewLabel_1_6);
		
		JLabel lblNewLabel_1_7 = new JLabel("New label");
		lblNewLabel_1_7.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/dionLopy.png")));
		lblNewLabel_1_7.setBounds(568, 180, 143, 144);
		contentPane.add(lblNewLabel_1_7);
		
		JLabel lblNewLabel_1_8 = new JLabel("New label");
		lblNewLabel_1_8.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/iddrisuBaba.png")));
		lblNewLabel_1_8.setBounds(753, 180, 143, 144);
		contentPane.add(lblNewLabel_1_8);
		
		JLabel lblNewLabel_1_9 = new JLabel("New label");
		lblNewLabel_1_9.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/gonzaloMelero.png")));
		lblNewLabel_1_9.setBounds(10, 365, 143, 144);
		contentPane.add(lblNewLabel_1_9);
		
		JLabel lblNewLabel_1_10 = new JLabel("New label");
		lblNewLabel_1_10.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/sergioArribas.png")));
		lblNewLabel_1_10.setBounds(189, 365, 143, 144);
		contentPane.add(lblNewLabel_1_10);
		
		JLabel lblNewLabel_1_11 = new JLabel("New label");
		lblNewLabel_1_11.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/adriEmbarba.png")));
		lblNewLabel_1_11.setBounds(380, 365, 139, 144);
		contentPane.add(lblNewLabel_1_11);
		
		JLabel lblNewLabel_1_12 = new JLabel("New label");
		lblNewLabel_1_12.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/largieRamazani.png")));
		lblNewLabel_1_12.setBounds(568, 365, 143, 144);
		contentPane.add(lblNewLabel_1_12);
		
		JLabel lblNewLabel_1_13 = new JLabel("New label");
		lblNewLabel_1_13.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/ibrahimaKone.png")));
		lblNewLabel_1_13.setBounds(753, 365, 143, 144);
		contentPane.add(lblNewLabel_1_13);
		
		JLabel lblNewLabel_1_9_1 = new JLabel("New label");
		lblNewLabel_1_9_1.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/leoBaptistao.png")));
		lblNewLabel_1_9_1.setBounds(10, 567, 143, 155);
		contentPane.add(lblNewLabel_1_9_1);
		
		JLabel lblNewLabel_1_9_2 = new JLabel("New label");
		lblNewLabel_1_9_2.setIcon(new ImageIcon(Alaves.class.getResource("/infofutbol/jugadores/almeria/marezi.png")));
		lblNewLabel_1_9_2.setBounds(189, 567, 143, 155);
		contentPane.add(lblNewLabel_1_9_2);
	}
}
