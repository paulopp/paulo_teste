BEGIN;

/* usuarios */
INSERT INTO usuario (login, senha) VALUES ('paulo', 'teste');

/* categorias */
INSERT INTO categoria (descricao) VALUES ('Auto');
INSERT INTO categoria (descricao) VALUES ('Beauty and Fitness');
INSERT INTO categoria (descricao) VALUES ('Entertainment');
INSERT INTO categoria (descricao) VALUES ('Food and Dining');
INSERT INTO categoria (descricao) VALUES ('Health');
INSERT INTO categoria (descricao) VALUES ('Sports');
INSERT INTO categoria (descricao) VALUES ('Travel');

/* empresas */
INSERT INTO empresa (titulo, telefone, endereco, cep, cidade, estado, descricao) VALUES ('Empresa ABCD', '55 14 3455-5656', 'Rua Antonio Alves, 25-28', 16400200, 'Bauru', 'SP', 'Empresa para testes');
INSERT INTO empresa (titulo, telefone, endereco, cep, cidade, estado, descricao) VALUES ('Empresa BFFG', '55 14 3455-8989', 'Rua Antonio Alves, 25-42', 16400200, 'Bauru', 'SP', 'Empresa para testes');
INSERT INTO empresa (titulo, telefone, endereco, cep, cidade, estado, descricao) VALUES ('Empresa FHEW', '55 14 3455-9191', 'Rua Antonio Alves, 25-64', 16400322, 'Bauru', 'SP', 'Empresa para testes');
INSERT INTO empresa (titulo, telefone, endereco, cep, cidade, estado, descricao) VALUES ('Empresa CDFF', '55 14 3455-4444', 'Rua Antonio Alves, 25-30', 16400340, 'Bauru', 'SP', 'Empresa para testes');
INSERT INTO empresa (titulo, telefone, endereco, cep, cidade, estado, descricao) VALUES ('Empresa TBTB', '55 14 3455-3232', 'Rua Antonio Alves, 25-22', 16400340, 'Bauru', 'SP', 'Empresa para testes');
INSERT INTO empresa (titulo, telefone, endereco, cep, cidade, estado, descricao) VALUES ('Empresa MARC', '55 14 3490-1234', 'Rua Quatro de Abril, 12344', 17400340, 'Marilia', 'SP', 'Empresa para testes');
INSERT INTO empresa (titulo, telefone, endereco, cep, cidade, estado, descricao) VALUES ('Empresa TERC', '55 14 3490-1243', 'Rua Quatro de Abril, 12333', 17400340, 'Marilia', 'SP', 'Empresa para testes');
INSERT INTO empresa (titulo, telefone, endereco, cep, cidade, estado, descricao) VALUES ('Empresa URKE', '55 14 3490-5678', 'Rua Quatro de Abril, 34099', 17400900, 'Marilia', 'SP', 'Empresa para testes');
INSERT INTO empresa (titulo, telefone, endereco, cep, cidade, estado, descricao) VALUES ('Empresa TRBE', '55 14 3490-5000', 'Rua Quatro de Abril, 45677', 17400940, 'Marilia', 'SP', 'Empresa para testes');
INSERT INTO empresa (titulo, telefone, endereco, cep, cidade, estado, descricao) VALUES ('Empresa CEDF', '55 14 3490-9977', 'Rua Quatro de Abril, 53407', 17560000, 'Marilia', 'SP', 'Empresa para testes');


/* categorias - empresas */
INSERT INTO categoria_empresa (id_categoria, id_empresa) VALUES (1,10);
INSERT INTO categoria_empresa (id_categoria, id_empresa) VALUES (2,9);
INSERT INTO categoria_empresa (id_categoria, id_empresa) VALUES (3,8);
INSERT INTO categoria_empresa (id_categoria, id_empresa) VALUES (4,7);
INSERT INTO categoria_empresa (id_categoria, id_empresa) VALUES (5,6);
INSERT INTO categoria_empresa (id_categoria, id_empresa) VALUES (6,5);
INSERT INTO categoria_empresa (id_categoria, id_empresa) VALUES (7,4);
INSERT INTO categoria_empresa (id_categoria, id_empresa) VALUES (6,3);
INSERT INTO categoria_empresa (id_categoria, id_empresa) VALUES (5,2);
INSERT INTO categoria_empresa (id_categoria, id_empresa) VALUES (4,1);

COMMIT;
