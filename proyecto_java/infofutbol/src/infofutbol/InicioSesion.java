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
import javax.swing.JPasswordField;

public class InicioSesion extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;
	private JTextField textFieldEmail;
	private JPasswordField passwordField;

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

	public InicioSesion() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 450, 300);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblPorFavorInicie = new JLabel("Por favor, inicie sesión");
		lblPorFavorInicie.setBounds(155, 11, 192, 35);
		contentPane.add(lblPorFavorInicie);
		
		textFieldEmail = new JTextField();
		textFieldEmail.setColumns(10);
		textFieldEmail.setBounds(237, 57, 136, 20);
		contentPane.add(textFieldEmail);
		
		JCheckBox chckbxNewCheckBox = new JCheckBox("Recuérdame");
		chckbxNewCheckBox.setBounds(142, 193, 136, 23);
		contentPane.add(chckbxNewCheckBox);
		
		JButton btnIniciarSesion = new JButton("Iniciar Sesión");
		btnIniciarSesion.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				// Aquí podrías añadir lógica para autenticar al usuario.
				// Si la autenticación es exitosa, se abrirá la ventana de equipos.
				Equipos equipos = new Equipos();
				equipos.setVisible(true);
				dispose();
			}
		});
		btnIniciarSesion.setBounds(110, 223, 192, 23);
		contentPane.add(btnIniciarSesion);
		
		JLabel lblIntroduceTuEmail = new JLabel("Introduce tu email:");
		lblIntroduceTuEmail.setBounds(31, 57, 144, 14);
		contentPane.add(lblIntroduceTuEmail);
		
		JLabel lblIntroduceLaContraseña = new JLabel("Introduce la contraseña:");
		lblIntroduceLaContraseña.setBounds(31, 113, 144, 14);
		contentPane.add(lblIntroduceLaContraseña);
		
		passwordField = new JPasswordField();
		passwordField.setBounds(237, 110, 136, 20);
		contentPane.add(passwordField);
	}
}

