--This file will create tables for the database and seed the menu

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,       
    email VARCHAR(255) UNIQUE NOT NULL,           
    password_hash VARCHAR(255) NOT NULL,          
    first_name VARCHAR(100),                      
    last_name VARCHAR(100),                       
    phone_number VARCHAR(20),                     
    points INT DEFAULT 0,                         
    profile_picture VARCHAR(255),                 
    cart_id INT,                                  
    order_history_id INT,                         
    favorites_id INT,                             
    signup_date DATETIME DEFAULT CURRENT_TIMESTAMP, 
);


--This table stores the items in the user's shopping cart.

CREATE TABLE cart (
    cart_id INT AUTO_INCREMENT PRIMARY KEY,   
    user_id INT NOT NULL,                      
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP, 
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP, 
    FOREIGN KEY (user_id) REFERENCES users(user_id) 
);

-- A cart has Items with their own details

CREATE TABLE cart_items (
    item_id INT AUTO_INCREMENT PRIMARY KEY,    
    cart_id INT NOT NULL,                       
    product_id INT NOT NULL,                    
    quantity INT NOT NULL,                      
    added_at DATETIME DEFAULT CURRENT_TIMESTAMP, 
    FOREIGN KEY (cart_id) REFERENCES cart(cart_id), 
    FOREIGN KEY (product_id) REFERENCES products(product_id) 
);



--This table stores a history of past orders for each user, with a link to the user table via order_history_id
CREATE TABLE order_history (
    order_history_id INT AUTO_INCREMENT PRIMARY KEY,  
    user_id INT NOT NULL,                             
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,    
    total_amount DECIMAL(10, 2) NOT NULL,             
    status VARCHAR(50),                               -- Status of the order (e.g., "completed", "pending")
    FOREIGN KEY (user_id) REFERENCES users(user_id)  
);

CREATE TABLE order_items (
    order_item_id INT AUTO_INCREMENT PRIMARY KEY,    
    order_history_id INT NOT NULL,                    
    product_id INT NOT NULL,                          
    quantity INT NOT NULL,                            
    price DECIMAL(10, 2) NOT NULL,                    
    FOREIGN KEY (order_history_id) REFERENCES order_history(order_history_id), 
    FOREIGN KEY (product_id) REFERENCES products(product_id) 
);


CREATE TABLE favorites (
    favorites_id INT AUTO_INCREMENT PRIMARY KEY,    
    user_id INT NOT NULL,                           
    product_id INT NOT NULL,                         
    added_at DATETIME DEFAULT CURRENT_TIMESTAMP,    
    FOREIGN KEY (user_id) REFERENCES users(user_id), 
    FOREIGN KEY (product_id) REFERENCES products(product_id) 
);


CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,   
    name VARCHAR(255) NOT NULL,                   
    description TEXT,                             
    price DECIMAL(10, 2) NOT NULL,               
    category VARCHAR(100),
    calorie INT NOT NULL,                                       
    image_url VARCHAR(255)                        
);



INSERT INTO products (name, description, price, category, stock_quantity, image_url)
VALUES
    ('Orignal Banh Mi', 'Pate, cold cuts, pickled veggies, crispy baguette', 9, 'Banh Mi', 500, 'images/test.jpg'),
    ('Beef Banh Mi', 'Vietnamese bagutte filled with pickled veggies, fresh herbs and rich, flavorful beef', 9.75, 'Banh Mi', 500, 'images/test.jpg'),
    ('Pork Banh Mi', 'Vietnamese bagutte filled with pickled veggies, fresh herbs and rich, flavorful pork', 9.75, 'Banh Mi', 500, 'images/test.jpg'),
    ('Chicken Banh Mi', 'Vietnamese bagutte filled with pickled veggies, fresh herbs and rich, flavorful chicken', 9.75, 'Banh Mi', 500, 'images/test.jpg'),
    ('Chicken Cheesesteak', 'Diced chicken, cheese and grilled onions', 9, 'Cheesesteak', 500, 'images/test.jpg'),
    ('Pizza Cheesesteak', 'Savory sauce, delious topping and soft crust on a Cheesesteak', 10, 'Cheesesteak', 500, 'images/test.jpg'),
    ('Veggie Cheesesteak', 'Grilled veggies, cheese, and savory seasonings', 9, 'Cheesesteak', 500, 'images/test.jpg'),
    ('Breakfast Sandwich', 'Hashbrown included', 7.50, 'Breakfast', 400, 'images/test.jpg'),
    ('Breakfast Platter', 'Hashbrown and sausage included', 8, 'Breakfast', 400, 'images/test.jpg'),
    ('Western Omelette', 'Eggs, veggie, and toast', 9, 'Breakfast', 400, 'images/test.jpg'),

    ;