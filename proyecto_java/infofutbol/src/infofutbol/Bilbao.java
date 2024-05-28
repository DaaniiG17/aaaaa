package infofutbol;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.ImageIcon;

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
		setBounds(100, 100, 971, 799);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel_19 = new JLabel("New label");
		lblNewLabel_19.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/unaiSimon.png")));
		lblNewLabel_19.setBounds(34, 11, 136, 144);
		contentPane.add(lblNewLabel_19);
		
		JLabel lblNewLabel_19_1 = new JLabel("New label");
		lblNewLabel_19_1.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/julenAgirrezabala.png")));
		lblNewLabel_19_1.setBounds(216, 11, 136, 144);
		contentPane.add(lblNewLabel_19_1);
		
		JLabel lblNewLabel_19_2 = new JLabel("New label");
		lblNewLabel_19_2.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/yuriBerchiche.png")));
		lblNewLabel_19_2.setBounds(398, 11, 136, 144);
		contentPane.add(lblNewLabel_19_2);
		
		JLabel lblNewLabel_19_3 = new JLabel("New label");
		lblNewLabel_19_3.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/yerayAlvarez.png")));
		lblNewLabel_19_3.setBounds(600, 11, 136, 144);
		contentPane.add(lblNewLabel_19_3);
		
		JLabel lblNewLabel_19_4 = new JLabel("New label");
		lblNewLabel_19_4.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/aitorParedes.png")));
		lblNewLabel_19_4.setBounds(795, 11, 136, 144);
		contentPane.add(lblNewLabel_19_4);
		
		JLabel lblNewLabel_19_5 = new JLabel("New label");
		lblNewLabel_19_5.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/daniVivian.png")));
		lblNewLabel_19_5.setBounds(34, 179, 136, 144);
		contentPane.add(lblNewLabel_19_5);
		
		JLabel lblNewLabel_19_6 = new JLabel("New label");
		lblNewLabel_19_6.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/iñigoLekue.png")));
		lblNewLabel_19_6.setBounds(216, 179, 136, 144);
		contentPane.add(lblNewLabel_19_6);
		
		JLabel lblNewLabel_19_7 = new JLabel("New label");
		lblNewLabel_19_7.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/beñatPrados.png")));
		lblNewLabel_19_7.setBounds(398, 179, 136, 144);
		contentPane.add(lblNewLabel_19_7);
		
		JLabel lblNewLabel_19_8 = new JLabel("New label");
		lblNewLabel_19_8.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/mikelVesga.png")));
		lblNewLabel_19_8.setBounds(600, 179, 136, 144);
		contentPane.add(lblNewLabel_19_8);
		
		JLabel lblNewLabel_19_9 = new JLabel("New label");
		lblNewLabel_19_9.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/ruizDeGalarreta.png")));
		lblNewLabel_19_9.setBounds(795, 179, 136, 144);
		contentPane.add(lblNewLabel_19_9);
		
		JLabel lblNewLabel_19_10 = new JLabel("New label");
		lblNewLabel_19_10.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/oihanSancet.png")));
		lblNewLabel_19_10.setBounds(34, 369, 136, 144);
		contentPane.add(lblNewLabel_19_10);
		
		JLabel lblNewLabel_19_11 = new JLabel("New label");
		lblNewLabel_19_11.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/raulGarcia.png")));
		lblNewLabel_19_11.setBounds(216, 369, 136, 144);
		contentPane.add(lblNewLabel_19_11);
		
		JLabel lblNewLabel_19_12 = new JLabel("New label");
		lblNewLabel_19_12.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/alexBerenguer.png")));
		lblNewLabel_19_12.setBounds(398, 369, 136, 144);
		contentPane.add(lblNewLabel_19_12);
		
		JLabel lblNewLabel_19_13 = new JLabel("New label");
		lblNewLabel_19_13.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/ikerMuniain.png")));
		lblNewLabel_19_13.setBounds(600, 369, 136, 144);
		contentPane.add(lblNewLabel_19_13);
		
		JLabel lblNewLabel_19_14 = new JLabel("New label");
		lblNewLabel_19_14.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/nicoWilliams.png")));
		lblNewLabel_19_14.setBounds(795, 369, 136, 144);
		contentPane.add(lblNewLabel_19_14);
		
		JLabel lblNewLabel_19_15 = new JLabel("New label");
		lblNewLabel_19_15.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/iñakiWilliams.png")));
		lblNewLabel_19_15.setBounds(34, 568, 136, 152);
		contentPane.add(lblNewLabel_19_15);
		
		JLabel lblNewLabel_19_16 = new JLabel("New label");
		lblNewLabel_19_16.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/asierVillalibre.png")));
		lblNewLabel_19_16.setBounds(216, 568, 136, 152);
		contentPane.add(lblNewLabel_19_16);
		
		JLabel lblNewLabel_19_17 = new JLabel("New label");
		lblNewLabel_19_17.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/malcomAdu.png")));
		lblNewLabel_19_17.setBounds(398, 575, 136, 138);
		contentPane.add(lblNewLabel_19_17);
		
		JLabel lblNewLabel_19_18 = new JLabel("New label");
		lblNewLabel_19_18.setIcon(new ImageIcon(Bilbao.class.getResource("/infofutbol/jugadores/bilbao/gorkaGuruzeta.png")));
		lblNewLabel_19_18.setBounds(600, 564, 136, 160);
		contentPane.add(lblNewLabel_19_18);
	}

}
