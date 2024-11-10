CREATE SCHEMA certificados;
USE certificados;

CREATE TABLE IF NOT EXISTS certificados.participantes
(
    id   INT auto_increment PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

INSERT INTO participantes (id, nome) 
       VALUES (null, 'Bud Conry'),
              (null, 'Elenore Duly'),
              (null, 'Irvin Cubbon'),
              (null, 'Marlie Ciciura'),
              (null, 'Ardine Rego'),
              (null, 'Tracy Islep'),
              (null, 'Melisandra Silveston'),
              (null, 'Rosalyn Geroldo'),
              (null, 'Rebecca Grelka'),
              (null, 'Sacha Rummery'),
              (null, 'Stanislas Youngs'),
              (null, 'Christel Nanuccioi'),
              (null, 'Pebrook Cannam'),
              (null, 'Waly Normanville'),
              (null, 'Dulcine Abrahamowitcz'),
              (null, 'Celie Siverns'),
              (null, 'Jaquenetta Cowley'),
              (null, 'Barby Dytham'),
              (null, 'Rafaelia Pleat'),
              (null, 'Trstram Caulkett'),
              (null, 'Helga Peerman'),
              (null, 'Wain De Hailes'),
              (null, 'Werner Ridewood'),
              (null, 'Padraig Matasov'),
              (null, 'Haley Brimming'),
              (null, 'Symon Jinkins'),
              (null, 'Chrysa Tebb'),
              (null, 'Jesselyn Di Filippo'),
              (null, 'Marietta Tames'),
              (null, 'Asher Yarnell');