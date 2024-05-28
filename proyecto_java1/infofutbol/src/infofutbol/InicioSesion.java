package infofutbol;

import java.awt.EventQueue;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.JTextField;
import javax.swing.JCheckBox;
import javax.swing.JButton;

public class InicioSesion extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;
	private JTextField textField_1;
	private JTextField textField_2;
	private JTextField textField_3;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					InicioSesion frame = new InicioSesion();
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
	public InicioSesion() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 450, 300);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblPorFavorInicie = new JLabel("Por favor, inicie sesión\r\n");
		lblPorFavorInicie.setBounds(155, 11, 192, 35);
		contentPane.add(lblPorFavorInicie);
		
		textField_1 = new JTextField();
		textField_1.setColumns(10);
		textField_1.setBounds(237, 57, 136, 20);
		contentPane.add(textField_1);
		
		textField_2 = new JTextField();
		textField_2.setColumns(10);
		textField_2.setBounds(237, 110, 136, 20);
		contentPane.add(textField_2);
		
		textField_3 = new JTextField();
		textField_3.setColumns(10);
		textField_3.setBounds(237, 162, 136, 20);
		contentPane.add(textField_3);
		
		JCheckBox chckbxNewCheckBox = new JCheckBox("Recuerdame");
		chckbxNewCheckBox.setBounds(155, 193, 97, 23);
		contentPane.add(chckbxNewCheckBox);
		
		JButton btnNewButton_1 = new JButton("Iniciar Sesión");
		btnNewButton_1.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				 Equipos Iniciar = new Equipos();
				 Iniciar.setVisible(true);
				 dispose();
			}
		});
		btnNewButton_1.setBounds(110, 223, 192, 23);
		contentPane.add(btnNewButton_1);
		
		JLabel lblNewLabel = new JLabel("Introduce tu email:");
		lblNewLabel.setBounds(31, 57, 144, 14);
		contentPane.add(lblNewLabel);
		
		JLabel lblIntroduceLaContrasea = new JLabel("Introduce la contraseña:");
		lblIntroduceLaContrasea.setBounds(31, 113, 144, 14);
		contentPane.add(lblIntroduceLaContrasea);
		
		JLabel lblRepiteLaContrasea = new JLabel("Repite la contraseña:");
		lblRepiteLaContrasea.setBounds(31, 165, 144, 14);
		contentPane.add(lblRepiteLaContrasea);
		}
}
