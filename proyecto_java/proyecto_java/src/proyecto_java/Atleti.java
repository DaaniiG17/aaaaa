package proyecto_java;

import java.awt.EventQueue;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

public class Atleti extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Atleti frame = new Atleti();
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
	public Atleti() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 450, 300);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JPanel contentPane_1 = new JPanel();
		contentPane_1.setLayout(null);
		contentPane_1.setBorder(new EmptyBorder(5, 5, 5, 5));
		contentPane_1.setBounds(0, 0, 969, 762);
		contentPane.add(contentPane_1);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/janOblak.png")));
		lblNewLabel.setBounds(32, 11, 141, 144);
		contentPane_1.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/antonioGomis.png")));
		lblNewLabel_1.setBounds(225, 11, 141, 144);
		contentPane_1.add(lblNewLabel_1);
		
		JLabel lblNewLabel_2 = new JLabel("New label");
		lblNewLabel_2.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/cesarAzpilicueta.png")));
		lblNewLabel_2.setBounds(434, 11, 141, 144);
		contentPane_1.add(lblNewLabel_2);
		
		JLabel lblNewLabel_3 = new JLabel("New label");
		lblNewLabel_3.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/joseGimenez.png")));
		lblNewLabel_3.setBounds(618, 11, 141, 144);
		contentPane_1.add(lblNewLabel_3);
		
		JLabel lblNewLabel_4 = new JLabel("New label");
		lblNewLabel_4.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/marioHermoso.png")));
		lblNewLabel_4.setBounds(796, 11, 141, 144);
		contentPane_1.add(lblNewLabel_4);
		
		JLabel lblNewLabel_5 = new JLabel("New label");
		lblNewLabel_5.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/stefanSavic.png")));
		lblNewLabel_5.setBounds(32, 181, 141, 144);
		contentPane_1.add(lblNewLabel_5);
		
		JLabel lblNewLabel_6 = new JLabel("New label");
		lblNewLabel_6.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/reinildo.png")));
		lblNewLabel_6.setBounds(225, 181, 141, 144);
		contentPane_1.add(lblNewLabel_6);
		
		JLabel lblNewLabel_7 = new JLabel("New label");
		lblNewLabel_7.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/nahuelMolina.png")));
		lblNewLabel_7.setBounds(434, 181, 141, 144);
		contentPane_1.add(lblNewLabel_7);
		
		JLabel lblNewLabel_8 = new JLabel("New label");
		lblNewLabel_8.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/marcosLlorente.png")));
		lblNewLabel_8.setBounds(618, 181, 141, 144);
		contentPane_1.add(lblNewLabel_8);
		
		JLabel lblNewLabel_9 = new JLabel("New label");
		lblNewLabel_9.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/koke.png")));
		lblNewLabel_9.setBounds(796, 181, 141, 144);
		contentPane_1.add(lblNewLabel_9);
		
		JLabel lblNewLabel_10 = new JLabel("New label");
		lblNewLabel_10.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/saulÑiguez.png")));
		lblNewLabel_10.setBounds(32, 391, 141, 144);
		contentPane_1.add(lblNewLabel_10);
		
		JLabel lblNewLabel_11 = new JLabel("New label");
		lblNewLabel_11.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/axelWitsel.png")));
		lblNewLabel_11.setBounds(225, 391, 141, 144);
		contentPane_1.add(lblNewLabel_11);
		
		JLabel lblNewLabel_12 = new JLabel("New label");
		lblNewLabel_12.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/pabloBarrios.png")));
		lblNewLabel_12.setBounds(434, 392, 141, 143);
		contentPane_1.add(lblNewLabel_12);
		
		JLabel lblNewLabel_13 = new JLabel("New label");
		lblNewLabel_13.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/rodrigoDePaul.png")));
		lblNewLabel_13.setBounds(618, 392, 141, 143);
		contentPane_1.add(lblNewLabel_13);
		
		JLabel lblNewLabel_14 = new JLabel("New label");
		lblNewLabel_14.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/rodrigoRiquelme.png")));
		lblNewLabel_14.setBounds(796, 391, 141, 144);
		contentPane_1.add(lblNewLabel_14);
		
		JLabel lblNewLabel_16 = new JLabel("New label");
		lblNewLabel_16.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/angelCorrea.png")));
		lblNewLabel_16.setBounds(32, 590, 141, 144);
		contentPane_1.add(lblNewLabel_16);
		
		JLabel lblNewLabel_17 = new JLabel("New label");
		lblNewLabel_17.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/antoineGrizzman.png")));
		lblNewLabel_17.setBounds(225, 590, 141, 144);
		contentPane_1.add(lblNewLabel_17);
		
		JLabel lblNewLabel_18 = new JLabel("New label");
		lblNewLabel_18.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/memphisDepay.png")));
		lblNewLabel_18.setBounds(434, 590, 141, 144);
		contentPane_1.add(lblNewLabel_18);
		
		JLabel lblNewLabel_19 = new JLabel("New label");
		lblNewLabel_19.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/samuLino.png")));
		lblNewLabel_19.setBounds(618, 590, 141, 144);
		contentPane_1.add(lblNewLabel_19);
		
		JLabel lblNewLabel_19_1 = new JLabel("New label");
		lblNewLabel_19_1.setIcon(new ImageIcon(Atleti.class.getResource("/jugadores/atleti/alvaroMorata.png")));
		lblNewLabel_19_1.setBounds(796, 590, 141, 144);
		contentPane_1.add(lblNewLabel_19_1);
	}

}
