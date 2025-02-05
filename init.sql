CREATE TABLE users (
    user_id SERIAL PRIMARY KEY,       
    email VARCHAR(255) UNIQUE NOT NULL,           
    password VARCHAR(255) NOT NULL,          
    first_name VARCHAR(100),                      
    last_name VARCHAR(100),                       
    phone_number VARCHAR(20),                                     
    signup_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);

CREATE TABLE items (
    item_id SERIAL PRIMARY KEY,   
    name VARCHAR(255) NOT NULL,                   
    description_short TEXT, 
    description_long TEXT,                             
    price DECIMAL(10,2) NOT NULL,               
    category VARCHAR(100),
    calorie INTEGER NOT NULL,                                       
    image_url VARCHAR(255)                        
);

CREATE TABLE addOns (
    addOn_id SERIAL PRIMARY KEY,   
    item_id INTEGER REFERENCES items(item_id) ON DELETE CASCADE,  
    name VARCHAR(255) NOT NULL,                                              
    price DECIMAL(10,2) NOT NULL,               
    calorie INTEGER NOT NULL,                                       
    image_url VARCHAR(255)                        
);

CREATE TABLE cart (
    cart_id SERIAL PRIMARY KEY,   
    user_id INTEGER NOT NULL,                      
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    FOREIGN KEY (user_id) REFERENCES users(user_id) 
);

CREATE TABLE cart_items (
    cart_item_id SERIAL PRIMARY KEY,    
    cart_id INTEGER NOT NULL,                       
    item_id INTEGER NOT NULL,                    
    quantity INTEGER NOT NULL,                      
    added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    FOREIGN KEY (cart_id) REFERENCES cart(cart_id), 
    FOREIGN KEY (item_id) REFERENCES items(item_id) 
);

CREATE TABLE order_history (
    order_history_id SERIAL PRIMARY KEY,  
    user_id INTEGER NOT NULL,                             
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,    
    total_amount DECIMAL(10, 2) NOT NULL,             
    status VARCHAR(50) DEFAULT 'pending',  
    FOREIGN KEY (user_id) REFERENCES users(user_id)  
);

CREATE TABLE order_items (
    order_item_id SERIAL PRIMARY KEY,    
    order_history_id INTEGER NOT NULL,                    
    item_id INTEGER NOT NULL,                          
    quantity INTEGER NOT NULL,                            
    price DECIMAL(10, 2) NOT NULL,                    
    FOREIGN KEY (order_history_id) REFERENCES order_history(order_history_id), 
    FOREIGN KEY (item_id) REFERENCES items(item_id) 
);

CREATE TABLE favorites (
    favorites_id SERIAL PRIMARY KEY,    
    user_id INTEGER NOT NULL,                           
    item_id INTEGER NOT NULL,                         
    added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,    
    FOREIGN KEY (user_id) REFERENCES users(user_id), 
    FOREIGN KEY (item_id) REFERENCES items(item_id) 
);

-- Insert Sample Items
INSERT INTO items (name, description_long, description_short, price, category, calorie, image_url)
VALUES
    ('Original Banh Mi', 'Pate, cold cuts, pickled veggies, crispy baguette', 'short description', 9.00, 'Banh Mi', 500, 'images/test.jpg'),
    ('Beef Banh Mi', 'Vietnamese baguette filled with pickled veggies, fresh herbs, and rich, flavorful beef', 'short description', 9.75, 'Banh Mi', 500, 'images/test.jpg'),
    ('Pork Banh Mi', 'Vietnamese baguette filled with pickled veggies, fresh herbs, and rich, flavorful pork', 'short description', 9.75, 'Banh Mi', 500, 'images/test.jpg'),
    ('Chicken Banh Mi', 'Vietnamese baguette filled with pickled veggies, fresh herbs, and rich, flavorful chicken', 'short description', 9.75, 'Banh Mi', 500, 'images/test.jpg'),
    ('Chicken Cheesesteak', 'Diced chicken, cheese, and grilled onions', 'short description', 9.00, 'Cheesesteak', 500, 'images/test.jpg'),
    ('Pizza Cheesesteak', 'Savory sauce, delicious toppings, and soft crust on a Cheesesteak', 10.00, 'Cheesesteak', 500, 'images/test.jpg'),
    ('Veggie Cheesesteak', 'Grilled veggies, cheese, and savory seasonings', 'short description', 9.00, 'Cheesesteak', 500, 'images/test.jpg'),
    ('Breakfast Sandwich', 'Hashbrown included', 'short description', 7.50, 'Breakfast', 400, 'images/test.jpg'),
    ('Breakfast Platter', 'Hashbrown and sausage included', 'short description', 8.00, 'Breakfast', 400, 'images/test.jpg'),
    ('Western Omelette', 'Eggs, veggies, and toast', 'short description', 9.00, 'Breakfast', 400, 'images/test.jpg');

-- Insert Sample User
INSERT INTO users (email, password, first_name, last_name, phone_number, signup_date)
VALUES (
    'admin@admin.com',
    'Password', 
    'Admin',
    'User',
    '1234567890',
    CURRENT_TIMESTAMP
);
