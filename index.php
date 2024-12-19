<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Chatbot CSS */
        .chatbot {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #3d0101;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: none; /* Hidden by default */
            flex-direction: column;
        }
        .chatbot-header {
            background-color: yellowgreen;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .chatbot-body {
            padding: 10px;
            display: flex;
            flex-direction: column;
            height: 300px;
        }
        .messages {
            flex-grow: 1;
            overflow-y: auto;
            margin-bottom: 10px;
        }
        .messages p {
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            max-width: 70%; /* Limit the width of the messages */
            color: black; /* Text color for both user and bot messages */
        }
        .messages .user-message {
            background-color: #f0f0f0; /* Grey background for user messages */
            align-self: flex-start; /* Align to the left */
        }
        .messages .bot-message {
            background-color: #d4edda; /* Green background for bot messages */
            align-self: flex-end; /* Align to the right */
        }
        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .chatbot-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            border: none;
            border-radius: 50%;
            padding: 10px; /* Reduced padding */
            cursor: pointer;
            font-size: 18px; /* Reduced font size */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s;
            width: 50px; /* Fixed width */
            height: 50px; /* Fixed height */
            display: flex; /* Center the icon */
            justify-content: center;
            align-items: center;
        }
        .chatbot-button:hover {
            background-color: maroon; /* Darken on hover */
        }
        .chatbot-button i {
            font-size: 20px; /* Icon size */
        }
    </style>
</head>

<body>
    <div class="main_container">
        <?php include 'header.php'; ?>
        <div class="content">
            <div class="left-side">
                <h1>We provide <br> the best local <br> food</h1>
                <p>Ribs Circle was inspired by the local kasi food called "Bunny Chow". <br>
                    The name "Ribs Circle" was derived from selling Ribs next to the circle.</p>
                <div class="buttons">
                    <button onclick="location.href='/RibsCircle_System/Reservations/reservations.php'">Reservations</button>
                </div>
                <div class="social-media-icons">
                    <a href="https://web.facebook.com/ribscircle" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://vm.tiktok.com/ZMrmeMfYL/" target="_blank"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.instagram.com/ribscircle_za?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="right-side">
                <img src="assets/images/plate.jpg" alt="Local Food">
                <div id="chatbot" class="chatbot">
                    <div class="chatbot-header">
                        <h3>Chat with us!</h3>
                        <button onclick="toggleChatbot()">×</button>
                    </div>
                    <div class="chatbot-body">
                        <div class="messages" id="messages"></div>
                        <input type="text" id="userInput" placeholder="Type your message..." onkeypress="handleKeyPress(event)">
                    </div>
                </div>
                <button class="chatbot-button" onclick="toggleChatbot()">
                    <i class="fas fa-comments"></i>
                </button>
            </div>
        </div>

        <!-- Section 2 -->
        <section class="special" id="special">
            <h1>Our Special Dish</h1>
            <p>The top 2 people's favorite meals at Ribs Circle are our "Dagwood with Ribs" in the dagwoods menu, <br>
                and the "Meaty Combo" coming with 4 pieces of wings, strips, ribs, and chips.</p>
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="assets/images/p2.jpg" alt="menu1">
                    <h3>Dagwood with Ribs</h3>
                    <p>Toasted Bread, Beef Patty, Lettuce, Cheese, Fried Onions, Ham, Bacon, 170g Ribs with 130g Chips</p>
                    <a href="./Menu/Dagwood_Menu/dagwood_menu.php" class="btn">Explore</a>
                </div>
                <div class="menu-item">
                    <img src="assets/images/meaty.jpg" alt="menu2">
                    <h3>Ribs & Wings</h3>
                    <p>300g Ribs, 4pc Chicken Wings with 250g Chips</p>
                    <a href="./Menu/Chicken_Menu/chickenmenu.php" class="btn">Explore</a>
                </div>
                <div class="menu-item">
                    <img src="assets/images/meaty.jpg" alt="menu3">
                    <h3>Meaty Combo</h3>
                    <p>300g Ribs, 200g Chicken Strips with wings x6</p>
                    <a href="./Menu/Ribs_Menu/Ribs.php" class="btn">Explore</a>
                </div>
            </div>
        </section>

        <div class="separate"><p></p></div>

        <section class="aboutus" id="aboutus">
            <div class="about-container">
                <div class="about-image">
                    <img src="assets/images/staff-members.jpg" alt="About Us Image">
                </div>
                <div class="about-text">
                    <h2>About Us</h2>
                    <p>Ribs Circle was established to bring the best local kasi food experience to everyone.
                        Inspired by the famous "Bunny Chow" and the idea of selling ribs next to a popular circle in
                        Tembisa, we bring a taste of home with every meal. Our food is made with passion and love,
                        and we believe in serving our customers with the same warmth we would serve our own family.
                        From our Dagwood specials to our delicious ribs, we strive to offer a unique, tasty,
                        and affordable dining experience.</p>
                </div>
            </div>
        </section>

        <div class="separate"><p></p></div>
        <!-- Section 4 -->
        <section class="section4">
            <div class="contactUS">
                <h2>CONTACT US</h2>
                <p>
                    <div><i class="fas fa-phone"></i> 081 218 5717</div>
                    <div><i class="fas fa-envelope"></i> ribscircle@gmail.com</div>
                    <div><i class="fas fa-map-marker-alt"></i> 452 Corner Koti & Sparrow St, Moteong, Tembisa, 1632</div>
                </p>
            </div>
            <div class="TradingHours">
                <h2>Trading Hours</h2>
                <p>
                    Sunday: 9:30am - 9pm<br>
                    Monday: 9:30am - 9pm<br>
                    Tuesday: 9:30am - 9pm<br>
                    Wednesday: 9:30am - 9pm<br>
                    Thursday: 9:30am - 9pm<br>
                    Friday: 9:30am - 10pm<br>
                    Saturday: 9:30am - 10pm<br>
                </p>
            </div>
            <div class="logo">
                <h2>FOLLOW US</h2>
                <a href="https://web.facebook.com/ribscircle" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://vm.tiktok.com/ZMrmeMfYL/" target="_blank"><i class="fab fa-tiktok"></i></a>
                <a href="https://www.instagram.com/ribscircle_za?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i></a>
                <p></p>
                <img src="assets/images/Logo.png" alt="Logo">
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="copyright">
                <p>© copyright by khanyisile</p>
            </div>
        </footer>

        <script>
            // Show the chatbot after 5 seconds
            window.onload = function() {
                setTimeout(toggleChatbot, 5000);
            };

            function toggleChatbot() {
                const chatbot = document.getElementById('chatbot');
                // Toggle display between none and flex
                chatbot.style.display = chatbot.style.display === 'none' || chatbot.style.display === '' ? 'flex' : 'none';
            }

            function handleKeyPress(event) {
                if (event.key === 'Enter') {
                    event.preventDefault(); // Prevent default form submission
                    const userInput = document.getElementById('userInput').value.trim();
                    if (userInput) {
                        addMessage(userInput, 'user');
                        document.getElementById('userInput').value = ''; // Clear input field
                        respondToUser(userInput);
                    }
                }
            }

            function addMessage(text, sender) {
                const messagesDiv = document.getElementById('messages');
                const message = document.createElement('p');
                message.textContent = sender === 'user' ? `You: ${text}` : `Bot: ${text}`;
                
                // Set specific class based on sender
                if (sender === 'user') {
                    message.classList.add('user-message');
                } else {
                    message.classList.add('bot-message');
                }

                messagesDiv.appendChild(message);
                messagesDiv.scrollTop = messagesDiv.scrollHeight; // Scroll to the bottom
            }

            function respondToUser(input) {
                const response = getBotResponse(input);
                addMessage(response, 'bot');
            }

            function getBotResponse(input) {
                const lowerInput = input.toLowerCase();
                // Log input for debugging
                console.log("User input:", lowerInput);
                if (lowerInput.includes('menu') || lowerInput.includes('food')) {
                    return "We offer delicious Dagwoods, Ribs, Wings, and Meaty Combos!";
                } else if (lowerInput.includes('reservations')) {
                    return "You can make reservations by visiting our Reservations page!";
                } else if (lowerInput.includes('kid')) {
                    return "Chips or a Russian wrap or No1 would be nice for your kid.";
                } else if (lowerInput.includes('delivery')) {
                    return "Not on our system, but here is a Swypa delivery number which you can call (087 133 2226) to place an order.";
                } else if (lowerInput.includes('how much do swypa charge')) {
                    return "R50 around Tembisa and Kempton Park only.";
                } else if (lowerInput.includes('without pork')) {
                    return "No1, 2, 3, chicken or chips.";
                } else if (lowerInput.includes('most selling items')) {
                    return "No7, wings, and meaty combos.";
                } else if (lowerInput.includes('operating hours')) {
                    return "9am to 9pm Monday to Thursday. Friday to Sunday 9am to 10pm.";
                } else if (lowerInput.includes('share')) {
                    return "Check on Combo meals on the Ribs and Chicken menu.";
                } else if (lowerInput.includes('how does call and collect work')) {
                    return "Call on this number (064 553 3126) and place an order; you will be assisted by our cashier.";
                } else if (lowerInput.includes('contact')) {
                    return "You can contact us at 081 218 5717 or email ribscircle@gmail.com.";
                } else if (lowerInput.includes('phone number')) {
                    return "You can contact us at 081 218 5717 or email ribscircle@gmail.com.";
                } else if (lowerInput.includes('time')) {
                    return "We're open Monday to Thursday from 9:30am to 9pm and Friday to Sunday 9:30 to 10pm.";
                } else if (lowerInput.includes('hours'))  {
                    return "We're open Sunday to Saturday from 9:30am to 10pm!";
                } else if (lowerInput.includes('recommend')) {
                    return "I recommend trying our Dagwood with Ribs—it's a customer favorite!";
                } else {
                    return "I'm sorry, I didn't understand that. Can you ask about our menu, reservations, or contact information?";
                }
            }
        </script>
    </body>
</html>