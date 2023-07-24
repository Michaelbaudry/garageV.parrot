CREATE TABLE user (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL, -- Increase the size for storing hashed passwords
  role VARCHAR(20) NOT NULL
);

-- Insert admin user
INSERT INTO user (name, email, password, role) VALUES ('Vincent Parrot', 'vincent.parrot@mail.fr', 'hashed_admin_password', 'admin');

-- Insert employee users
INSERT INTO user (name, email, password, role) VALUES ('Hélène', 'helene@mail.fr', 'Helene', 'secretaire');
INSERT INTO user (name, email, password, role) VALUES ('Michaël', 'mika1@mail.fr', 'hashed_michael_password', 'commercial');
INSERT INTO user (name, email, password, role) VALUES ('Thierry', 'thierry@mail.fr', 'hashed_thierry_password', 'mecanicien');
INSERT INTO user (name, email, password, role) VALUES ('Roger', 'roger@mail.fr', 'hashed_roger_password', 'peintre');
INSERT INTO user (name, email, password, role) VALUES ('Pascal', 'pascal@mail.fr', 'hashed_pascal_password', 'carrossier');
-- Répétez cette requête pour chaque employé avec des emails et des mots de passe appropriés.
