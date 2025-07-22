<!-- resources/views/components/chatbot.blade.php -->

<div class="kaajwala-chatbot">
    <!-- Chatbot Icon -->
    <div class="chatbot-trigger">
        <i class="fas fa-comments"></i>
        <span class="notification-badge"></span>
    </div>
    
    <!-- Chat Window -->
    <div class="chatbot-window">
        <div class="chatbot-header">
            <div class="agent-info">
                <img src="{{ asset('images/kaajwala-logo.png') }}" alt="KaajWala">
                <div>
                    <h4>KaajWala Support</h4>
                    <p class="status">Online</p>
                </div>
            </div>
            <div class="chat-controls">
                <button class="minimize-btn"><i class="fas fa-minus"></i></button>
                <button class="close-btn"><i class="fas fa-times"></i></button>
            </div>
        </div>
        
        <div class="chat-messages">
            <!-- Initial greeting will be added by JavaScript -->
        </div>
        
        <div class="chat-input-area">
            <div class="quick-actions">
                <button data-action="services">Services</button>
                <button data-action="booking">Booking Help</button>
                <button data-action="emergency">Emergency</button>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Type your question..." id="chat-input">
                <button id="send-btn"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
</div>

<style>
    .kaajwala-chatbot {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 9999;
        font-family: 'Segoe UI', Roboto, sans-serif;
    }
    
    .chatbot-trigger {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #4CAF50, #8BC34A);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
        position: relative;
    }
    
    .chatbot-trigger:hover {
        transform: scale(1.1);
    }
    
    .notification-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background: #FF5722;
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        display: none;
    }
    
    .chatbot-window {
        width: 380px;
        height: 500px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 5px 30px rgba(0,0,0,0.2);
        position: absolute;
        bottom: 80px;
        right: 0;
        display: none;
        flex-direction: column;
        overflow: hidden;
    }
    
    .chatbot-active .chatbot-window {
        display: flex;
    }
    
    .chatbot-header {
        background: linear-gradient(135deg, #4CAF50, #8BC34A);
        color: white;
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .agent-info {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .agent-info img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }
    
    .agent-info h4 {
        margin: 0;
        font-size: 16px;
    }
    
    .status {
        margin: 0;
        font-size: 12px;
        opacity: 0.8;
    }
    
    .chat-controls {
        display: flex;
        gap: 10px;
    }
    
    .chat-controls button {
        background: rgba(255,255,255,0.2);
        border: none;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        color: white;
        cursor: pointer;
        transition: background 0.2s;
    }
    
    .chat-controls button:hover {
        background: rgba(255,255,255,0.3);
    }
    
    .chat-messages {
        flex: 1;
        padding: 15px;
        overflow-y: auto;
        background: #f5f7fa;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    
    .message {
        max-width: 80%;
        padding: 12px 16px;
        border-radius: 18px;
        font-size: 14px;
        line-height: 1.4;
        position: relative;
    }
    
    .bot-message {
        background: white;
        border: 1px solid #e0e0e0;
        align-self: flex-start;
        border-bottom-left-radius: 4px;
    }
    
    .user-message {
        background: linear-gradient(135deg, #4CAF50, #8BC34A);
        color: white;
        align-self: flex-end;
        border-bottom-right-radius: 4px;
    }
    
    .message-time {
        font-size: 11px;
        color: #757575;
        margin-top: 5px;
        text-align: right;
    }
    
    .quick-actions {
        display: flex;
        gap: 8px;
        padding: 10px 15px;
        flex-wrap: wrap;
    }
    
    .quick-actions button {
        background: rgba(76, 175, 80, 0.1);
        border: 1px solid #4CAF50;
        color: #4CAF50;
        border-radius: 20px;
        padding: 6px 12px;
        font-size: 12px;
        cursor: pointer;
        transition: all 0.2s;
    }
    
    .quick-actions button:hover {
        background: rgba(76, 175, 80, 0.2);
    }
    
    .input-group {
        display: flex;
        padding: 0 15px 15px;
        gap: 10px;
    }
    
    #chat-input {
        flex: 1;
        padding: 12px 15px;
        border: 1px solid #e0e0e0;
        border-radius: 30px;
        outline: none;
        font-size: 14px;
    }
    
    #chat-input:focus {
        border-color: #4CAF50;
    }
    
    #send-btn {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        transition: background 0.2s;
    }
    
    #send-btn:hover {
        background: #3d8b40;
    }
    
    .typing-indicator {
        display: flex;
        gap: 5px;
        padding: 10px 15px;
        background: white;
        border: 1px solid #e0e0e0;
        border-radius: 18px;
        width: fit-content;
        margin-bottom: 15px;
        border-bottom-left-radius: 4px;
    }
    
    .typing-dot {
        width: 8px;
        height: 8px;
        background: #9E9E9E;
        border-radius: 50%;
        animation: typing 1.4s infinite ease-in-out;
    }
    
    .typing-dot:nth-child(1) {
        animation-delay: 0s;
    }
    
    .typing-dot:nth-child(2) {
        animation-delay: 0.2s;
    }
    
    .typing-dot:nth-child(3) {
        animation-delay: 0.4s;
    }
    
    @keyframes typing {
        0%, 60%, 100% {
            transform: translateY(0);
            opacity: 0.6;
        }
        30% {
            transform: translateY(-5px);
            opacity: 1;
        }
    }
    
    .service-categories {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-top: 10px;
    }
    
    .service-category {
        background: rgba(76, 175, 80, 0.1);
        border: 1px solid #C8E6C9;
        border-radius: 8px;
        padding: 8px 12px;
        font-size: 13px;
        cursor: pointer;
        transition: all 0.2s;
    }
    
    .service-category:hover {
        background: rgba(76, 175, 80, 0.2);
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatbot = document.querySelector('.kaajwala-chatbot');
    const trigger = document.querySelector('.chatbot-trigger');
    const closeBtn = document.querySelector('.close-btn');
    const minimizeBtn = document.querySelector('.minimize-btn');
    const chatInput = document.getElementById('chat-input');
    const sendBtn = document.getElementById('send-btn');
    const chatMessages = document.querySelector('.chat-messages');
    const notificationBadge = document.querySelector('.notification-badge');
    const quickActions = document.querySelectorAll('.quick-actions button');
    
    let unreadMessages = 0;
    let isTyping = false;
    
    // Service database for Bangladesh
    const serviceDB = {
        categories: [
            "Electrician", "Plumber", "Cleaner", "Mechanic", 
            "Painter", "Mason", "Carpenter", "AC Technician",
            "Refrigerator Repair", "Cook", "Housemaid", "Security Guard",
            "Tailor", "Driver", "Gardener", "Internet Technician",
            "Pest Control", "Computer Repair", "Photographer", "Mover & Packer",
            "Makeup Artist", "Roofer", "Laundry Service", "Solar Installer",
            "Beautician", "Event Organizer", "Decorator", "Gas Line Filter",
            "Locksmith", "Home Nurse", "ATM Technician", "Window Cleaner",
            "Printer Repair", "Delivery Rider", "Upholsterer", "Tutor",
            "Cable Installer", "Interior Designer", "CCTV Technician",
            "Babysitter", "Office Assistant", "Emergency Repairs", "Welding Specialist"
        ],
        
        serviceDetails: {
            "Electrician": {
                description: "Expert electrical services including wiring, repairs, and installations.",
                popularAreas: ["Dhaka", "Chittagong", "Sylhet"],
                averageRate: "৳500-৳1500/hour",
                emergency: true
            },
            "Plumber": {
                description: "Comprehensive plumbing solutions for homes and businesses.",
                popularAreas: ["All major cities"],
                averageRate: "৳400-৳1200/hour",
                emergency: true
            },
            "Cleaner": {
                description: "Professional cleaning services for homes and offices.",
                popularAreas: ["Dhaka", "Chittagong"],
                averageRate: "৳300-৳800/hour",
                emergency: false
            },
            // Add details for all other services similarly
            "Emergency Repairs": {
                description: "24/7 emergency repair services for urgent home issues.",
                popularAreas: ["All major cities"],
                averageRate: "৳800-৳2500 depending on issue",
                emergency: true,
                contact: "Call 09678-787878 for immediate assistance"
            }
        },
        
        commonQuestions: {
            "hi": "Hello! Welcome to KaajWala. How can I assist you today?",
            "hello": "Hello! Looking for home services or professional workers?",
            "thanks": "You're welcome! Let me know if you need anything else.",
            "bye": "Thank you for using KaajWala. Stay safe!",
            "urgent": "For emergency services, please call our hotline at 09678-787878",
            "price": "Service rates vary by type and location. Could you specify which service you need?",
            "rating": "All our providers are rated by customers. You can see ratings when booking.",
            "verify": "All KaajWala providers are verified with background checks and ID verification.",
            "payment": "We accept bKash, Nagad, credit cards, and cash on service completion."
        }
    };
    
    // Initialize chat
    function initChat() {
        addBotMessage("Welcome to KaajWala! I'm here to help you find trusted professionals across Bangladesh. How can I assist you today?");
        showQuickReplies();
    }
    
    // Toggle chat window
    trigger.addEventListener('click', function() {
        chatbot.classList.toggle('chatbot-active');
        if (chatbot.classList.contains('chatbot-active')) {
            unreadMessages = 0;
            updateNotificationBadge();
        }
    });
    
    // Close chat
    closeBtn.addEventListener('click', function() {
        chatbot.classList.remove('chatbot-active');
    });
    
    // Minimize chat
    minimizeBtn.addEventListener('click', function() {
        chatbot.classList.remove('chatbot-active');
    });
    
    // Send message
    function sendMessage() {
        const message = chatInput.value.trim();
        if (message && !isTyping) {
            addUserMessage(message);
            chatInput.value = '';
            processUserInput(message.toLowerCase());
        }
    }
    
    // Process user input
    function processUserInput(input) {
        showTypingIndicator();
        
        setTimeout(() => {
            hideTypingIndicator();
            
            // Check for common questions first
            let response = checkCommonQuestions(input);
            
            if (!response) {
                // Check for service-related queries
                const matchedService = serviceDB.categories.find(service => 
                    input.includes(service.toLowerCase()));
                
                if (matchedService) {
                    response = generateServiceResponse(matchedService);
                } else if (input.includes('service') || input.includes('category')) {
                    response = showServiceCategories();
                } else if (input.includes('book') || input.includes('hire')) {
                    response = "To book a service:<br>1. Visit our Services page<br>2. Select your needed service<br>3. Choose a provider<br>4. Confirm booking details<br>5. Make payment";
                } else if (input.includes('emergency')) {
                    response = "For emergency services, please call our 24/7 hotline at <strong>09678-787878</strong> or visit our Emergency Repairs section.";
                } else {
                    response = "I'm sorry, I didn't understand. You can ask about:<br>- Specific services (electrician, plumber, etc.)<br>- Booking process<br>- Service rates<br>- Emergency contacts<br>Or click the quick options below.";
                }
            }
            
            addBotMessage(response);
            showQuickReplies();
        }, 1000 + Math.random() * 1000); // Random delay for natural feel
    }
    
    // Check common questions
    function checkCommonQuestions(input) {
        for (const [keyword, response] of Object.entries(serviceDB.commonQuestions)) {
            if (input.includes(keyword)) {
                return response;
            }
        }
        return null;
    }
    
    // Generate service response
    function generateServiceResponse(serviceName) {
        const service = serviceDB.serviceDetails[serviceName] || {};
        
        let response = `<strong>${serviceName}</strong><br>`;
        response += service.description || "Professional service available across Bangladesh.";
        
        if (service.popularAreas) {
            response += `<br><br><strong>Popular Areas:</strong> ${service.popularAreas.join(', ')}`;
        }
        
        if (service.averageRate) {
            response += `<br><strong>Average Rate:</strong> ${service.averageRate}`;
        }
        
        if (service.emergency) {
            response += `<br><br><span style="color:#F44336">Emergency service available: Call 09678-787878</span>`;
        }
        
        response += `<br><br><a href="/services/${serviceName.toLowerCase().replace(/ /g, '-')}" style="color:#4CAF50;text-decoration:none">→ Browse ${serviceName} providers</a>`;
        
        return response;
    }
    
    // Show service categories
    function showServiceCategories() {
        let response = `<strong>Our Service Categories</strong><br>Select a category to learn more:`;
        response += `<div class="service-categories">`;
        
        // Show first 12 categories (can be adjusted)
        serviceDB.categories.slice(0, 12).forEach(category => {
            response += `<div class="service-category" onclick="handleServiceCategory('${category}')">${category}</div>`;
        });
        
        response += `</div>`;
        response += `<br><a href="/services" style="color:#4CAF50;text-decoration:none">→ View all services</a>`;
        
        return response;
    }
    
    // Handle service category selection
    window.handleServiceCategory = function(category) {
        addUserMessage(category);
        processUserInput(category.toLowerCase());
    }
    
    // Show quick replies
    function showQuickReplies() {
        const quickReplies = `
            <div class="quick-actions">
                <button data-action="services">Browse Services</button>
                <button data-action="booking">How to Book</button>
                <button data-action="emergency">Emergency Help</button>
            </div>
        `;
        
        // Add a small delay before showing quick replies
        setTimeout(() => {
            chatMessages.insertAdjacentHTML('beforeend', quickReplies);
            
            // Add event listeners to new buttons
            document.querySelectorAll('.quick-actions button').forEach(button => {
                button.addEventListener('click', function() {
                    const action = this.getAttribute('data-action');
                    handleQuickAction(action);
                });
            });
            
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }, 300);
    }
    
    // Handle quick actions
    function handleQuickAction(action) {
        let message = "";
        switch(action) {
            case "services":
                message = "Show me service categories";
                break;
            case "booking":
                message = "How do I book a service?";
                break;
            case "emergency":
                message = "I need emergency help";
                break;
        }
        
        addUserMessage(message);
        processUserInput(message.toLowerCase());
    }
    
    // Add bot message
    function addBotMessage(text) {
        const now = new Date();
        const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        
        const messageDiv = document.createElement('div');
        messageDiv.className = 'message bot-message';
        messageDiv.innerHTML = `
            ${text}
            <div class="message-time">${timeString}</div>
        `;
        
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
    
    // Add user message
    function addUserMessage(text) {
        const now = new Date();
        const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        
        const messageDiv = document.createElement('div');
        messageDiv.className = 'message user-message';
        messageDiv.innerHTML = `
            ${text}
            <div class="message-time">${timeString}</div>
        `;
        
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
        
        if (!chatbot.classList.contains('chatbot-active')) {
            unreadMessages++;
            updateNotificationBadge();
        }
    }
    
    // Show typing indicator
    function showTypingIndicator() {
        isTyping = true;
        
        const typingDiv = document.createElement('div');
        typingDiv.className = 'typing-indicator';
        typingDiv.innerHTML = `
            <div class="typing-dot"></div>
            <div class="typing-dot"></div>
            <div class="typing-dot"></div>
        `;
        
        chatMessages.appendChild(typingDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
    
    // Hide typing indicator
    function hideTypingIndicator() {
        isTyping = false;
        const indicators = document.querySelectorAll('.typing-indicator');
        indicators.forEach(indicator => indicator.remove());
    }
    
    // Update notification badge
    function updateNotificationBadge() {
        if (unreadMessages > 0) {
            notificationBadge.style.display = 'flex';
            notificationBadge.textContent = unreadMessages > 9 ? '9+' : unreadMessages;
        } else {
            notificationBadge.style.display = 'none';
        }
    }
    
    // Event listeners
    sendBtn.addEventListener('click', sendMessage);
    chatInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') sendMessage();
    });
    
    // Initialize chat
    initChat();
});
</script>