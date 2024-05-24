package infofutbol;

import java.awt.EventQueue;
import java.awt.Image;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.ImageIcon;

public class Equipos extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Equipos frame = new Equipos();
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
	public Equipos() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 967, 526);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("Alaves");
		lblNewLabel.setBounds(34, 38, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/alaves.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		
		JLabel lblAlmeria = new JLabel("Almeria");
		lblAlmeria.setBounds(209, 38, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/almeria.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblAlmeria);
		
		JLabel lblBilbao = new JLabel("Bilbao");
		lblBilbao.setBounds(415, 38, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/bilbao.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblBilbao);
		
		JLabel lblAtleti = new JLabel("Atleti");
		lblAtleti.setBounds(617, 38, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/atleticoMadrid.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblAtleti);
		
		JLabel lblBarca = new JLabel("Barca");
		lblBarca.setBounds(832, 38, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/barca.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblBarca);
		
		JLabel lblBetis = new JLabel("Betis");
		lblBetis.setBounds(34, 146, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/betis.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblBetis);
		
		JLabel lblCadiz = new JLabel("Cadiz");
		lblCadiz.setBounds(209, 146, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/cadiz.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblCadiz);
		
		JLabel lblCelta = new JLabel("Celta");
		lblCelta.setBounds(415, 146, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/celta.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblCelta);
		
		JLabel lblGetafe = new JLabel("Getafe");
		lblGetafe.setBounds(617, 146, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/getafe.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblGetafe);
		
		JLabel lblGirona = new JLabel("Girona");
		lblGirona.setBounds(832, 146, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/girona.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblGirona);
		
		JLabel lblGranada = new JLabel("Granada");
		lblGranada.setBounds(34, 263, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/granada.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblGranada);
		
		JLabel lblMadrid = new JLabel("Madrid");
		lblMadrid.setBounds(34, 376, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/realMadrid.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblMadrid);
		
		JLabel lblLasPalmas = new JLabel("Las Palmas");
		lblLasPalmas.setBounds(209, 263, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/lasPalmas.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblLasPalmas);
		
		JLabel lblMallorca = new JLabel("Mallorca");
		lblMallorca.setBounds(415, 263, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/mallorca.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblMallorca);
		
		JLabel lblOsasuna = new JLabel("Osasuna");
		lblOsasuna.setBounds(617, 263, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/osasuna.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblOsasuna);
		
		JLabel lblRayo = new JLabel("Rayo ");
		lblRayo.setBounds(832, 263, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/rayo.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblRayo);
		
		JLabel lblRealSociedad = new JLabel("Real Sociedad");
		lblRealSociedad.setBounds(209, 376, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/realSociedad.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblRealSociedad);
		
		JLabel lblSevilla = new JLabel("Sevilla");
		lblSevilla.setBounds(415, 376, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/sevilla.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblSevilla);
		
		JLabel lblValencia = new JLabel("Valencia");
		lblValencia.setBounds(617, 376, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/valencia.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblValencia);
		
		JLabel lblVillarreal = new JLabel("Villarreal");
		lblVillarreal.setBounds(832, 376, 55, 36);
		lblNewLabel.setIcon(new ImageIcon(new ImageIcon(getClass().getResource("/imgEquipos/villarreal.jpg")).getImage().getScaledInstance(20, 20, Image.SCALE_SMOOTH)));
		contentPane.add(lblNewLabel);
		contentPane.add(lblVillarreal);
		
	}

}
