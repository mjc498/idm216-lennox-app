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
    image_url VARCHAR(255),
    prep_time INTEGER                        
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


INSERT INTO items (name, description_long, description_short, price, category, calorie, image_url, prep_time)
VALUES 

    ('Hot Sausage (Beef)', 'A savory, spicy beef sausage with a kick, packed with rich flavor in every bite.', 'Spicy beef sausage with bold flavor.', 4.00, 'Specialty Sandwiches', 450, 'images/test.jpg', 8),
    ('Hot Sausage w/ Red Sauce', 'A bold and spicy beef sausage, complemented by a tangy red sauce for a deliciously zesty bite.', 'Beef sausage with tangy red sauce for extra zest.', 10.00, 'Specialty Sandwiches', 500, 'images/test.jpg', 10),
    ('Lamb Gyro', 'A juicy lamb gyro, served with fresh veggies, creamy tzatziki, and wrapped in soft pita for a flavorful Mediterranean experience.', 'Grilled lamb with fresh veggies and tzatziki in pita.', 6.00, 'Specialty Sandwiches', 700, 'images/test.jpg', 10),
    ('Chicken Gyro', 'Savory grilled chicken, complemented by fresh veggies, tangy sauce, and wrapped in a warm pita.', 'Grilled chicken with fresh veggies and tzatziki in pita.', 6.00, 'Specialty Sandwiches', 650, 'images/test.jpg', 10),
    ('Fish Sandwich', 'A crispy fried fish fillet served on a soft bun, paired with fresh toppings and a light sauce.', 'Crispy fried fish fillet on a soft bun.', 8.00, 'Specialty Sandwiches', 650, 'images/test.jpg', 10),
    ('Hot Honey Chicken', 'Crispy chicken drizzled with a sweet and spicy hot honey glaze, offering a perfect balance of heat and sweetness.', 'Crispy chicken with sweet and spicy hot honey glaze.', 8.00, 'Specialty Sandwiches', 550, 'images/test.jpg', 12),
    ('Zesty Fried Chicken', 'Crispy fried chicken seasoned with zesty spices for a bold, flavorful bite.', 'Crispy fried chicken with zesty seasoning.', 9.00, 'Specialty Sandwiches', 600, 'images/test.jpg', 12),
    ('Lemongrass Beef', 'Tender beef grilled to perfection, marinated in a fragrant lemongrass sauce for a fresh, aromatic taste.', 'Grilled beef marinated in aromatic lemongrass sauce.', 10.50, 'Platters', 800, 'images/test.jpg', 15),
    ('Lemongrass Chicken', 'Juicy chicken grilled with a zesty lemongrass marinade, delivering a fragrant and flavorful experience.', 'Grilled chicken with fragrant lemongrass marinade.', 10.00, 'Platters', 750, 'images/test.jpg', 15),
    ('Beef and Shrimp w/ Can Soda', 'A satisfying mix of tender beef and shrimp, served with a refreshing can of soda for a complete meal.', 'Beef and shrimp served with a refreshing soda.', 13.30, 'Platters', 750, 'images/test.jpg', 15),
    ('Salmon and Shrimp w/ Can Soda', 'Flavorful salmon and succulent shrimp, served with a can of soda for a balanced and tasty meal.', 'Salmon and shrimp served with a soda for a complete meal.', 13.50, 'Platters', 700, 'images/test.jpg', 15),
    ('Grilled Cheese', 'A classic grilled cheese sandwich with gooey melted cheese between two crispy, golden slices of bread.', 'Classic grilled cheese with melted cheese on toasted bread.', 3.00, 'Grilled Cheese', 400, 'images/test.jpg', 5),
    ('Grilled Cheese w/ Tomato', 'A grilled cheese sandwich with the added freshness of juicy tomato slices, creating a perfect savory combination.', 'Grilled cheese with fresh tomato slices.', 3.50, 'Grilled Cheese', 450, 'images/test.jpg', 6),
    ('Grilled Cheese w/ Bacon, T. Bacon, Sausage, Ham', 'A hearty grilled cheese sandwich, packed with bacon, turkey bacon, sausage, and ham for a satisfying, meaty twist.', 'Grilled cheese loaded with bacon, sausage, and ham.', 5.00, 'Grilled Cheese', 600, 'images/test.jpg', 8),
    ('Grilled Chicken', 'A perfectly grilled chicken breast, tender and juicy, ideal for a healthy and flavorful meal.', 'Juicy grilled chicken breast served as a simple meal.', 6.00, 'Grilled Cheese', 500, 'images/test.jpg', 10),
    ('BLT', 'A classic BLT sandwich with crispy bacon, fresh lettuce, and juicy tomato, all nestled between two slices of toasted bread.', 'Crispy bacon, lettuce, and tomato in a toasted sandwich.', 5.50, 'Grilled Cheese', 550, 'images/test.jpg', 8),
    ('Hamburger', 'A juicy beef patty, grilled to perfection, served on a soft bun with your choice of toppings.', 'Pair it with one of our delectable sides!', 5.00, 'Burgers', 500, 'images/test.jpg', 10),
    ('Cheeseburger', 'A tender beef patty topped with melted cheese, served on a soft bun with your favorite condiments.', 'Everyone loves a classic cheeseburger.', 5.50, 'Burgers', 550, 'images/test.jpg', 10),
    ('Bacon Cheeseburger', 'A delicious cheeseburger with a juicy beef patty, melted cheese, and crispy bacon for added flavor.', 'Upgraded with bacon.', 6.50, 'Burgers', 650, 'images/test.jpg', 12),
    ('Turkey Burger', 'A lean and flavorful turkey patty, served on a soft bun, offering a healthy and tasty alternative to traditional burgers.', 'Lean turkey patty on a soft bun for a healthier burger.', 5.75, 'Burgers', 525, 'images/test.jpg', 10),
    ('Turkey Cheeseburger', 'A juicy turkey patty topped with melted cheese, served on a bun for a lighter yet satisfying burger experience.', 'Turkey patty topped with melted cheese for a light option.', 6.25, 'Burgers', 600, 'images/test.jpg', 10),
    ('Pizza Cheeseburger', 'A cheeseburger with a twist—topped with pizza-inspired ingredients like marinara sauce and melted mozzarella cheese.', 'Cheeseburger topped with marinara sauce and mozzarella.', 6.50, 'Burgers', 650, 'images/test.jpg', 12),
    ('Sandwich w/ Hash Browns (2)', 'A sandwich featuring crispy hash browns, adding a satisfying crunch to each bite.', 'Hash browns included!', 2.00, 'Breakfast', 400, 'images/test.jpg', 7),
    ('Platter w/ Hash Browns (3)', 'A hearty platter served with three golden, crispy hash browns, perfect as a side or part of a larger meal.', 'Hash browns & sausage included!', 2.50, 'Breakfast', 500, 'images/test.jpg', 7),
    ('Plain Egg', 'A classic, simple egg cooked to your liking, perfect for any time of day.', 'Cooked to perfection.', 4.00, 'Breakfast', 150, 'images/test.jpg', 5),
    ('Egg Cheese', 'Fluffy scrambled eggs with melted cheese for a rich, creamy flavor in every bite.', 'Eggs, veggie, cheese.', 5.00, 'Breakfast', 250, 'images/test.jpg', 5),
    ('Egg w/ Bacon, T. Bacon, Sausage, Pork Roll, Ham', 'Eggs paired with bacon, turkey bacon, sausage, pork roll, or ham for a hearty, protein-packed meal.', 'Eggs paired with various meats for a hearty meal.', 6.50, 'Breakfast', 500, 'images/test.jpg', 8),
    ('Egg w/ Steak', 'Eggs served alongside a tender, juicy steak for a balanced and filling meal.', 'Eggs served with a juicy steak.', 7.50, 'Breakfast', 600, 'images/test.jpg', 10),
    ('Egg w/ Hot Sausage', 'Scrambled eggs served with spicy hot sausage, adding a bold kick to your breakfast.', 'Eggs served with spicy hot sausage.', 9.00, 'Breakfast', 650, 'images/test.jpg', 10),
    ('Western Omelet', 'A savory Western omelet filled with ham, peppers, and onions for a flavorful and hearty breakfast option.', 'Omelet with ham, peppers, and onions.', 7.00, 'Breakfast', 700, 'images/test.jpg', 12),
    ('Cheesesteak w/ Can Soda and Fries', 'A juicy cheesesteak served with crispy fries and a refreshing can of soda, making for a complete meal.', 'Classic cheesesteak with fries and a can of soda.', 12.00, 'Combo Meals', 1200, 'images/test.jpg', 12),
    ('Chicken Cheesesteak w/ Can Soda and Fries', 'Tender chicken cheesesteak, served with crispy fries and a refreshing can of soda for a satisfying meal.', 'Chicken cheesesteak served with fries and soda.', 12.00, 'Combo Meals', 1200, 'images/test.jpg', 12),
    ('Cheeseburger w/ Can Soda and Fries', 'A delicious cheeseburger paired with crispy fries and a can of soda for a classic meal deal.', 'Cheeseburger with fries and a can of soda.', 10.00, 'Combo Meals', 1100, 'images/test.jpg', 12),
    ('Bacon Cheeseburger w/ Can Soda and Fries', 'A savory bacon cheeseburger served with crispy fries and a can of soda, making for a complete and satisfying meal.', 'Bacon cheeseburger with fries and soda.', 11.00, 'Combo Meals', 1200, 'images/test.jpg', 12),
    ('Chicken Tenders w/ Can Soda and Fries', 'Crispy chicken tenders served with golden fries and a can of soda for a delicious meal.', 'Crispy chicken tenders with fries and soda.', 10.00, 'Combo Meals', 1100, 'images/test.jpg', 12),
    ('Croissant Mi', 'A fusion of flavors with traditional Vietnamese ingredients, served on a buttery croissant for a unique twist.', 'Vietnamese sandwich in a buttery croissant.', 8.00, 'Banh Mi', 550, 'images/test.jpg', 8),
    ('Original Banh Mi', 'A classic Vietnamese banh mi filled with savory meats, pickled vegetables, and fresh herbs in a crispy baguette.', 'Pate, cold cuts, pickled veggies, crispy baguette.', 9.00, 'Banh Mi', 600, 'images/test.jpg', 8),
    ('Pork Banh Mi', 'A delicious Vietnamese banh mi sandwich filled with marinated pork, pickled veggies, and fresh herbs in a crispy baguette.', 'Grilled pork, pickled veggies, crispy baguette.', 9.75, 'Banh Mi', 700, 'images/test.jpg', 10),
    ('Beef Banh Mi', 'A savory Vietnamese banh mi sandwich filled with flavorful beef, pickled vegetables, and fresh herbs.', 'Grilled beef, pickled veggies, crispy baguette.', 9.75, 'Banh Mi', 700, 'images/test.jpg', 10),
    ('Chicken Banh Mi', 'A crispy baguette filled with seasoned chicken, pickled vegetables, and fresh herbs for a delicious banh mi experience.', 'Grilled chicken, pickled veggies, crispy baguette.', 9.50, 'Banh Mi', 650, 'images/test.jpg', 10),
    ('Fish Patty Banh Mi', 'A flavorful fish patty, pickled vegetables, and fresh herbs in a crispy Vietnamese baguette.', 'Fish patty in a Vietnamese baguette with fresh ingredients.', 9.00, 'Banh Mi', 650, 'images/test.jpg', 10),
    ('Cheesesteak', 'A classic Philly cheesesteak with tender beef, melted cheese, and all the fixings on a soft hoagie roll.', 'Philly-style cheesesteak with melted cheese and beef.', 9.00, 'Cheesesteaks', 800, 'images/test.jpg', 10),
    ('Chicken Cheesesteak', 'Grilled chicken topped with melted cheese and served on a hoagie roll for a delicious twist on the classic cheesesteak.', 'Diced chicken, cheese and grilled onions.', 9.00, 'Cheesesteaks', 750, 'images/test.jpg', 10),
    ('Vegetarian Cheesesteak', 'A vegetarian take on the classic cheesesteak, featuring plant-based ingredients and melted cheese on a soft hoagie roll.', 'Grilled veggies, cheese, savory seasonings.', 7.75, 'Cheesesteaks', 650, 'images/test.jpg', 10),
    ('Cheesesteak Hoagie', 'A Philly-style cheesesteak, served on a hoagie roll with all the classic toppings and melted cheese.', 'Philly cheesesteak served in a hoagie roll with toppings.', 9.75, 'Cheesesteaks', 850, 'images/test.jpg', 12),
    ('Chicken Cheesesteak Hoagie', 'Grilled chicken topped with melted cheese, served on a hoagie roll with all the traditional cheesesteak toppings.', 'Chicken cheesesteak in a hoagie roll with traditional toppings.', 9.75, 'Cheesesteaks', 800, 'images/test.jpg', 12),
    ('Buffalo Chicken Cheesesteak Hoagie', 'Spicy buffalo chicken, melted cheese, and classic cheesesteak toppings served in a hoagie roll for a bold, flavorful sandwich.', 'Spicy buffalo chicken cheesesteak in a hoagie roll.', 10.00, 'Cheesesteaks', 850, 'images/test.jpg', 12),
    ('Pizza Cheesesteak (Beef or Chicken)', 'A cheesesteak topped with marinara sauce and melted mozzarella cheese, available with either beef or chicken.', 'Savory sauce, delicious toppings and soft crust.', 10.00, 'Cheesesteaks', 900, 'images/test.jpg', 12),
    ('BBQ Cheesesteak (Beef or Chicken)', 'A savory cheesesteak topped with smoky BBQ sauce, available with beef or chicken.', 'Grilled veggies and melted cheese.', 10.00, 'Cheesesteaks', 900, 'images/test.jpg', 12),
    ('Salmon Cheesesteak', 'A unique twist on the classic cheesesteak, featuring grilled salmon with melted cheese on a hoagie roll.', 'Cheesesteak with grilled salmon and melted cheese.', 11.00, 'Cheesesteaks', 750, 'images/test.jpg', 12),
    ('Fries', 'Golden, crispy fries, perfect as a side or for dipping.', 'Crispy golden fries, perfect as a side dish.', 3.00, 'Sides', 400, 'images/test.jpg', 5),
    ('Cheese Fries', 'Crispy fries topped with melted cheese for an extra indulgent side dish.', 'Fries topped with melted cheese for an indulgent side.', 4.00, 'Sides', 500, 'images/test.jpg', 6),
    ('Loaded Fries (Beef, Chicken, Veggies)', 'Crispy fries loaded with your choice of beef, chicken, or veggies, topped with cheese and other delicious ingredients.', 'Fries topped with beef, chicken, or veggies and cheese.', 8.00, 'Sides', 800, 'images/test.jpg', 8),
    ('(3) Hash Browns', 'Three golden, crispy hash browns, perfect as a side or part of your meal.', 'Three crispy hash browns, perfect as a side or s', 2.50, 'Sides', 350, 'images/test.jpg', 6),
    ('Soda', 'A refreshing can of soda to complete your meal.', 'Refreshing, chilled and thirst-quenching.', 2.00, 'Sides', 150, 'images/test.jpg', 0),
    ('Extra Veggies', '', '', 1.00, 'Add Ons', 50, 'images/test.jpg', 2),
    ('Extra Cheese', '', '', 0.50, 'Add Ons', 100, 'images/test.jpg', 2),
    ('Add Egg', '', '', 1.00, 'Add Ons', 150, 'images/test.jpg', 5);

INSERT INTO users (email, password, first_name, last_name, phone_number, signup_date)
VALUES (
    'admin@admin.com',
    'Password', 
    'Admin',
    'User',
    '1234567890',
    CURRENT_TIMESTAMP
);


