package proyecto_java;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JScrollBar;
import javax.swing.JComboBox;
import javax.swing.DefaultComboBoxModel;

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
		setBounds(100, 100, 909, 415);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JComboBox comboBox = new JComboBox();
		comboBox.setModel(new DefaultComboBoxModel(new String[] {"Elige el equipo que quieres ver", "ALAVES", "ALMERIA", "ATLETI", "BARCA", "BETIS", "BILBAO", "CADIZ", "CELTA", "GETAFE", "GIRONA", "GRANADA", "LAS PALMAS", "MALLORCA", "OSASUNA", "RAYO VALLECANO", "REAL MADRID", "REAL SOCIEDAD", "SEVILLA", "VALENCIA", "VILLARREAL"}));
		comboBox.setToolTipText("");
		comboBox.setMaximumRowCount(20);
		comboBox.setBounds(328, 133, 266, 77);
		contentPane.add(comboBox);
	}
}
