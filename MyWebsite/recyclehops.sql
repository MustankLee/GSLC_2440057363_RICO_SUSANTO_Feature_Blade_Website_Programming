CREATE DATABASE recyclehops;

CREATE TABLE product (
	product_id INT NOT NULL AUTO_INCREMENT,
    product_name VARCHAR(255),
    product_price INT,
    product_desc VARCHAR(255),
    product_img_url VARCHAR(555),
    PRIMARY KEY (product_id)  
);

INSERT INTO product (product_name, product_price, product_desc, product_img_url) VALUES 
('Glass Container', 80000, 'Good quality of glass container that suitable for you to bring during you vacation', 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/10/9/1e3d1772-80b3-42ca-a3e3-878a644597e3.jpg'),
('Bags', 180000, 'A strong and durable bags which really recommended for those always bring so many things to outside', 'https://i.pinimg.com/originals/0a/f9/88/0af988be4e033d4c66586b36acbe9697.jpg'),
('Skateboard', 120000, 'Time to shine with the new recycle skateeeee booooaaarrdd product!', 'https://upload.wikimedia.org/wikipedia/commons/4/41/Globe_Skateboard.jpg'),
('Blanket', 120000, 'Feel cool in the midnight? you should by this blanket to warm you up.', 'https://images-cdn.ubuy.co.id/3MK4WXI-bedsure-fleece-king-size-blankets-for.jpg'),
('Wallet', 230000, 'At least you must have a wallet to make you looks coooooool', 'https://m.media-amazon.com/images/I/919V+ZDE2EL._SX450_.jpg'),
('Carpet', 240000, 'Its time to upgrade your house with this stunning carrrpeet', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVDwULzmW_7rjpe3Pl-mPRoqvhjT1U1uSXtykXfxzgCKUYtZW3fveagpz07cjO02hh3ds&usqp=CAU'), 
('Bottle', 120000, 'Simple, not too much design, easy to bring perfect for bring outside', 'https://img.freepik.com/free-psd/17-oz-metallic-water-bottles-mockup-front-view_1332-4383.jpg?w=2000'),
('Jacket', 280000, 'Get this jacket before sold out, it will make you feel warm anytime', 'https://media.wired.com/photos/606ce52941bf976945513469/191:100/w_1280,c_limit/Gear-Cloudburst-Jacket---Mandarin-Front-square-grey-back.jpg'),
('Raincoat', 200000, 'Get the raincoat before you get wet, the perfect raincoat for the rainy day', 'https://media.gq.com/photos/5ad75d22ceb93861adb9120f/master/w_2000,h_1333,c_limit/2018-04_GQ_Raincoats-norse_3x2.jpg');
