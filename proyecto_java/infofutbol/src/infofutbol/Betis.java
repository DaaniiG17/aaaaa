package infofutbol;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.ImageIcon;

public class Betis extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Betis frame = new Betis();
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
	public Betis() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 966, 796);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/claudioBravo.png")));
		lblNewLabel.setBounds(40, 11, 133, 144);
		contentPane.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/ruiSilva.png")));
		lblNewLabel_1.setBounds(233, 11, 133, 144);
		contentPane.add(lblNewLabel_1);
		
		JLabel lblNewLabel_2 = new JLabel("New label");
		lblNewLabel_2.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/abnerVinicius.png")));
		lblNewLabel_2.setBounds(409, 11, 133, 144);
		contentPane.add(lblNewLabel_2);
		
		JLabel lblNewLabel_3 = new JLabel("New label");
		lblNewLabel_3.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/chadiRiad.png")));
		lblNewLabel_3.setBounds(596, 11, 133, 144);
		contentPane.add(lblNewLabel_3);
		
		JLabel lblNewLabel_4 = new JLabel("New label");
		lblNewLabel_4.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/germanPezzella.png")));
		lblNewLabel_4.setBounds(767, 11, 133, 144);
		contentPane.add(lblNewLabel_4);
		
		JLabel lblNewLabel_5 = new JLabel("New label");
		lblNewLabel_5.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/sokratis.png")));
		lblNewLabel_5.setBounds(31, 176, 142, 144);
		contentPane.add(lblNewLabel_5);
		
		JLabel lblNewLabel_6 = new JLabel("New label");
		lblNewLabel_6.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/juanMiranda.png")));
		lblNewLabel_6.setBounds(218, 188, 133, 132);
		contentPane.add(lblNewLabel_6);
		
		JLabel lblNewLabel_7 = new JLabel("New label");
		lblNewLabel_7.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/youssufSabaly.png")));
		lblNewLabel_7.setBounds(395, 176, 133, 144);
		contentPane.add(lblNewLabel_7);
		
		JLabel lblNewLabel_8 = new JLabel("New label");
		lblNewLabel_8.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/guidoRodriguez.png")));
		lblNewLabel_8.setBounds(584, 188, 133, 132);
		contentPane.add(lblNewLabel_8);
		
		JLabel lblNewLabel_9 = new JLabel("New label");
		lblNewLabel_9.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/johnnyCardoso.png")));
		lblNewLabel_9.setBounds(767, 188, 133, 132);
		contentPane.add(lblNewLabel_9);
		
		JLabel lblNewLabel_10 = new JLabel("New label");
		lblNewLabel_10.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/williamCarvalho.png")));
		lblNewLabel_10.setBounds(31, 359, 142, 151);
		contentPane.add(lblNewLabel_10);
		
		JLabel lblNewLabel_11 = new JLabel("New label");
		lblNewLabel_11.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/Isco.png")));
		lblNewLabel_11.setBounds(218, 368, 142, 142);
		contentPane.add(lblNewLabel_11);
		
		JLabel lblNewLabel_12 = new JLabel("New label");
		lblNewLabel_12.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/marcRoca.png")));
		lblNewLabel_12.setBounds(395, 359, 133, 151);
		contentPane.add(lblNewLabel_12);
		
		JLabel lblNewLabel_13 = new JLabel("New label");
		lblNewLabel_13.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/rodri.png")));
		lblNewLabel_13.setBounds(584, 359, 142, 151);
		contentPane.add(lblNewLabel_13);
		
		JLabel lblNewLabel_14 = new JLabel("New label");
		lblNewLabel_14.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/nabilFekir.png")));
		lblNewLabel_14.setBounds(767, 368, 133, 142);
		contentPane.add(lblNewLabel_14);
		
		JLabel lblNewLabel_15 = new JLabel("New label");
		lblNewLabel_15.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/aitorRuibal.png")));
		lblNewLabel_15.setBounds(40, 548, 133, 142);
		contentPane.add(lblNewLabel_15);
		
		JLabel lblNewLabel_16 = new JLabel("New label");
		lblNewLabel_16.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/assaneDiao.png")));
		lblNewLabel_16.setBounds(233, 542, 119, 154);
		contentPane.add(lblNewLabel_16);
		
		JLabel lblNewLabel_17 = new JLabel("New label");
		lblNewLabel_17.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/williamJose.png")));
		lblNewLabel_17.setBounds(395, 546, 133, 144);
		contentPane.add(lblNewLabel_17);
		
		JLabel lblNewLabel_18 = new JLabel("New label");
		lblNewLabel_18.setIcon(new ImageIcon(Betis.class.getResource("/infofutbol/jugadores/betis/ayozePerez.png")));
		lblNewLabel_18.setBounds(584, 536, 145, 151);
		contentPane.add(lblNewLabel_18);
	}
}
