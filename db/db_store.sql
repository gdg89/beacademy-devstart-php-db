
-- crear banco--
CREATE DATABASE db_store;

--selecionar banco --
USE db_store;

--crear tabela--
CREATE TABLE tb_category(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL
);

CREATE TABLE tb_product(
    id INT(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    value FLOAT(5,2) NOT NULL,
    category_id INT(11)NOT NULL,
    quantity INT(5) NOT NULL,
    created_at DATETIME NOT NULL
);
-- inserir dados --
    --CATEGORIA--
    INSERT INTO tb_category(name,description)
    VALUES
    ('Informatica','Produtos de Informatica e accesorios para computador'),
    ('Ecritorio','Canetas , cadernos ,etc'),
    ('Eletronicos','TVs, Som portatil, caixas de som,etc');
    
    -- PRODUTOS--
    


    INSERT INTO tb_product(name,description, photo, value, quantity, category_id, created_at)
    VALUES
    ('Hub Usb 3.0 XINKEJI', 'Docking Station 10 em 1 com 4K HDMI', 'https://m.media-amazon.com/images/I/61XlTR7eniS._AC_UL320_.jpg', 163, 50, 1,'2022/06/14'),
    ('C3Tech NBC-50', 'Base preta para Notebook', 'https://m.media-amazon.com/images/I/51L-D6a7EaL._AC_UL320_.jpg', 56, 200, 1,'2022/06/14'),
    ('Multilaser BO400', 'Case Neoprene Para Notebook Até 15,6 Pol. Preto E Cinza','https://m.media-amazon.com/images/I/519Qu8e0mcL._AC_UL320_.jpg', 51, 451, 1,'2022/06/14'),
    ('Multilaser MO251', 'Mouse Sem Fio 2.4 Ghz 1200 DPI Usb - Preto - normal','https://m.media-amazon.com/images/I/61cvFkNWMhL._AC_UL320_.jpg', 22, 65, 1,'2022/06/14'),
    ('Webcam Full HD Logitech C920s', 'com Microfone Embutido e Proteção de Privacidade','https://images-na.ssl-images-amazon.com/images/I/61SCZyiMSNL._AC_UL604_SR604,400_.jpg', 397, 210, 1,'2022/06/14'),
    ('Suporte para Notebook', 'OCTOO, Uptable, UP-BL, Preto', 'https://images-na.ssl-images-amazon.com/images/I/51NM5D1VN+L._AC_UL604_SR604,400_.jpg', 59, 72, 1,'2022/06/14'),
    ('Repetidor Expansor', 'TP-Link Wi-Fi Network 300Mbps - TL-WA850RE','https://images-na.ssl-images-amazon.com/images/I/51XnfIuIDmL._AC_UL604_SR604,400_.jpg',130.11, 98, 1,'2022/06/14'),
    (' Base para Notebook', 'C3Tech NBC-50 Preto', 'https://images-na.ssl-images-amazon.com/images/I/51L-D6a7EaL._AC_UL604_SR604,400_.jpg',60.5,156, 1,'2022/06/14'),
    ('Combo Teclado e Mouse', 'Sem fio Logitech MK220 com Design Compacto, Conexão USB, Pilhas Inclusas e Layout ABNT2','https://images-na.ssl-images-amazon.com/images/I/51eu4O70lpL._AC_UL302_SR302,200_.jpg', 116, 354, 1,'2022/06/14'),
    ('Placa de Vídeo ASUS TUF Gaming', 'GeForce GTX 1660 Super, 6GB GDDR6, OC edition','https://images-na.ssl-images-amazon.com/images/I/618ie2OWTeL._AC_UL302_SR302,200_.jpg',200,651, 1,'2022/06/14'),
    ('Notebook Lenovo', 'Ultrafino IdeaPad 3i i3-10110U 4GB 256 GB SSD Windows 11 15.6" 82BS000JBR Prata','https://images-na.ssl-images-amazon.com/images/I/51pIlgIyjZL._AC_UL302_SR302,200_.jpg', 500, 65, 1,'2022/06/14'),
    ('Kit 2x Cabo Lightning Baseus', '1.5M 2.4A Rápido Compatível Com Iphone 6, 7, 8, X, XR, XS', 'https://images-na.ssl-images-amazon.com/images/I/419dGw-VLtL._AC_UL302_SR302,200_.jpg',49.80,78, 1,'2022/06/14'),
    ('TABLET SAMSUNG', 'T735 GALAXY TAB S7 FE 4G 12.4 128GB PRETO MAN','https://images-na.ssl-images-amazon.com/images/I/61lPpXziEWL._AC_UL302_SR302,200_.jpg', 800,22.65, 1,'2022/06/14'),
    ('Pasta Térmica Cooler', 'Master MasterGel Regular, 4g, 1.5ml, Cinza, 5 W/m-K', 'https://images-na.ssl-images-amazon.com/images/I/511Bh3YD7pL._AC_UL302_SR302,200_.jpg',32.90,312, 1,'2022/06/14'),
    ('Mouse sem fio Logitech', 'MX Master 3 com Sensor Darkfield para Uso em Qualquer Superfície','https://images-na.ssl-images-amazon.com/images/I/71zp7CMBb0L._AC_UL302_SR302,200_.jpg',465,38, 1,'2022/06/14'),
    ('Máscara Meu Cacho Minha Vida', '450g', 'https://images-na.ssl-images-amazon.com/images/I/61YV1GQZhyL._AC_UL160_SR160,160_.jpg', 239, 154, 1,'2022/06/14'),
    ('Cabo de Rede Plus', 'Cable Cat.5E 10M Azul Patch Cord - PC-ETHU100BL','https://m.media-amazon.com/images/I/51eL3TlkInL._AC_UL320_.jpg', 23, 156, 1,'2022/06/14'),
    ('Wacom One CTL472', 'Mesa Digitalizadora -Preto / Vermelho', 'https://m.media-amazon.com/images/I/71+xzUu92ZL._AC_UL320_.jpg', 199, 84, 1,'2022/06/14'),
    ('HEADSET GAMER', 'FONE PROFISSIONAL CELULAR XBOX ONIKUMA P2 K1', 'https://m.media-amazon.com/images/I/61zEJxLV83L._AC_UL320_.jpg', 141, 300, 1,'2022/06/14'),
    ('Suporte P/Notebook - Regulável', 'Ergonômico e Portátil (ROSA)', 'https://m.media-amazon.com/images/I/517ffs1adsL._AC_UL320_.jpg', 25.50, 72, 1,'2022/06/14');
