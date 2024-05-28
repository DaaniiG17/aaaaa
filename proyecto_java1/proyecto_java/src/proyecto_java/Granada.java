package proyecto_java;

import java.awt.EventQueue;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

public class Granada extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Granada frame = new Granada();
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
	public Granada() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 887, 614);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/augustoBatalla.png")));
		lblNewLabel.setBounds(20, 32, 141, 146);
		contentPane.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/raulFernandez.png")));
		lblNewLabel_1.setBounds(204, 32, 141, 146);
		contentPane.add(lblNewLabel_1);
		
		JLabel lblNewLabel_2 = new JLabel("New label");
		lblNewLabel_2.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/carlosNeva.png")));
		lblNewLabel_2.setBounds(391, 32, 141, 146);
		contentPane.add(lblNewLabel_2);
		
		JLabel lblNewLabel_3 = new JLabel("New label");
		lblNewLabel_3.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/ignasiMiquel.png")));
		lblNewLabel_3.setBounds(578, 32, 141, 146);
		contentPane.add(lblNewLabel_3);
		
		JLabel lblNewLabel_4 = new JLabel("New label");
		lblNewLabel_4.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/jesusVallejo.png")));
		lblNewLabel_4.setBounds(771, 32, 141, 146);
		contentPane.add(lblNewLabel_4);
		
		JLabel lblNewLabel_5 = new JLabel("New label");
		lblNewLabel_5.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/kamilPiatkowski.png")));
		lblNewLabel_5.setBounds(20, 219, 141, 146);
		contentPane.add(lblNewLabel_5);
		
		JLabel lblNewLabel_6 = new JLabel("New label");
		lblNewLabel_6.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/miguelRubio.png")));
		lblNewLabel_6.setBounds(204, 219, 141, 146);
		contentPane.add(lblNewLabel_6);
		
		JLabel lblNewLabel_7 = new JLabel("New label");
		lblNewLabel_7.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/ricardSanchez.png")));
		lblNewLabel_7.setBounds(391, 219, 141, 146);
		contentPane.add(lblNewLabel_7);
		
		JLabel lblNewLabel_8 = new JLabel("New label");
		lblNewLabel_8.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/victorDiaz.png")));
		lblNewLabel_8.setBounds(578, 219, 141, 146);
		contentPane.add(lblNewLabel_8);
		
		JLabel lblNewLabel_9 = new JLabel("New label");
		lblNewLabel_9.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/sergioRuiz.png")));
		lblNewLabel_9.setBounds(771, 219, 141, 146);
		contentPane.add(lblNewLabel_9);
		
		JLabel lblNewLabel_11 = new JLabel("New label");
		lblNewLabel_11.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/oscarMelendo.png")));
		lblNewLabel_11.setBounds(20, 410, 141, 137);
		contentPane.add(lblNewLabel_11);
		
		JLabel lblNewLabel_12 = new JLabel("New label");
		lblNewLabel_12.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/myrtoUzuni.png")));
		lblNewLabel_12.setBounds(204, 410, 141, 137);
		contentPane.add(lblNewLabel_12);
		
		JLabel lblNewLabel_13 = new JLabel("New label");
		lblNewLabel_13.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/gonzaloVillar.png")));
		lblNewLabel_13.setBounds(391, 410, 141, 137);
		contentPane.add(lblNewLabel_13);
		
		JLabel lblNewLabel_14 = new JLabel("New label");
		lblNewLabel_14.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/gerardGumbau.png")));
		lblNewLabel_14.setBounds(578, 410, 141, 137);
		contentPane.add(lblNewLabel_14);
		
		JLabel lblNewLabel_15 = new JLabel("New label");
		lblNewLabel_15.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/antonioPuertas.png")));
		lblNewLabel_15.setBounds(771, 415, 141, 127);
		contentPane.add(lblNewLabel_15);
		
		JLabel lblNewLabel_16 = new JLabel("New label");
		lblNewLabel_16.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/joseCallejon.png")));
		lblNewLabel_16.setBounds(20, 583, 141, 153);
		contentPane.add(lblNewLabel_16);
		
		JLabel lblNewLabel_17 = new JLabel("New label");
		lblNewLabel_17.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/lucasBoye.png")));
		lblNewLabel_17.setBounds(204, 583, 141, 153);
		contentPane.add(lblNewLabel_17);
		
		JLabel lblNewLabel_18 = new JLabel("New label");
		lblNewLabel_18.setIcon(new ImageIcon(Granada.class.getResource("/jugadores/granada/matiasArezo.png")));
		lblNewLabel_18.setBounds(397, 583, 135, 153);
		contentPane.add(lblNewLabel_18);
		
	}

}
