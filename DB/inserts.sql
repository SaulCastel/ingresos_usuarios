INSERT INTO profile_role VALUES (0, 'administrador'), (1, 'empleado');
INSERT INTO profile_state VALUES (0, 'no activo'), (1, 'activo');
INSERT INTO payment_type VALUES (0, 'hora normal'), (1, 'bono'), (2, 'hora extra');
INSERT INTO profile (email, name, last_name, password, state, role) VALUES ('admin@e4cc.com', 'Saul', 'Castellanos', 'password', 1, 0);
INSERT INTO profile (email, name, last_name, password, state) VALUES ('user1@e4cc.com', 'Nombre1', 'Apellido1', 'password', 1);
INSERT INTO profile (email, name, last_name, password, state) VALUES ('user2@e4cc.com', 'Nombre2', 'Apellido2', 'password', 1);
INSERT INTO profile (email, name, last_name, password, state) VALUES ('user3@e4cc.com', 'Nombre3', 'Apellido3', 'password', 0);