package infofutbol;

import java.awt.EventQueue;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.JTextField;
import javax.swing.JPasswordField;
import javax.swing.JLabel;
import javax.swing.JCheckBox;

public class Registro extends JFrame {

    private static final long serialVersionUID = 1L;
    private JPanel contentPane;
    private JTextField textField_1;
    private JPasswordField passwordField;
    private JPasswordField passwordField_1;

    /**
     * Lanzar la aplicación.
     */
    public static void main(String[] args) {
        EventQueue.invokeLater(new Runnable() {
            public void run() {
                try {
                    Registro frame = new Registro();
                    frame.setVisible(true);
                } catch (Exception e) {
                    e.printStackTrace();
                }
            }
        });
    }

    /**
     * Crear el frame.
     */
    public Registro() {
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setBounds(100, 100, 450, 300);
        contentPane = new JPanel();
        contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

        setContentPane(contentPane);
        contentPane.setLayout(null);

        JPanel contentPane_1 = new JPanel();
        contentPane_1.setLayout(null);
        contentPane_1.setBorder(new EmptyBorder(5, 5, 5, 5));
        contentPane_1.setBounds(0, 0, 434, 261);
        contentPane.add(contentPane_1);

        textField_1 = new JTextField();
        textField_1.setColumns(10);
        textField_1.setBounds(248, 54, 136, 20);
        contentPane_1.add(textField_1);

        JLabel lblNewLabel_1 = new JLabel("Introduce tu email:");
        lblNewLabel_1.setBounds(55, 57, 144, 14);
        contentPane_1.add(lblNewLabel_1);

        JLabel lblIntroduceLaContrasena = new JLabel("Introduce la contraseña:");
        lblIntroduceLaContrasena.setBounds(55, 113, 144, 14);
        contentPane_1.add(lblIntroduceLaContrasena);

        JLabel lblRepiteLaContrasena = new JLabel("Repite la contraseña:");
        lblRepiteLaContrasena.setBounds(55, 165, 144, 14);
        contentPane_1.add(lblRepiteLaContrasena);

        JButton btnNewButton = new JButton("Registrarse");
        btnNewButton.setBounds(118, 227, 192, 23);
        contentPane_1.add(btnNewButton);

        JLabel lblNewLabel = new JLabel("Por favor, cree su cuenta");
        lblNewLabel.setBounds(148, 8, 192, 35);
        contentPane_1.add(lblNewLabel);

        JCheckBox chckbxNewCheckBox = new JCheckBox("Recuérdame");
        chckbxNewCheckBox.setBounds(148, 197, 137, 23);
        contentPane_1.add(chckbxNewCheckBox);

        passwordField = new JPasswordField();
        passwordField.setBounds(248, 110, 136, 20);
        contentPane_1.add(passwordField);

        passwordField_1 = new JPasswordField();
        passwordField_1.setBounds(248, 162, 136, 20);
        contentPane_1.add(passwordField_1);

        btnNewButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                Equipos iniciar = new Equipos();
                iniciar.setVisible(true);
                dispose();
            }
        });
    }
}
