<!-- resources/views/components/chatbot.blade.php -->

<div class="kw-chatbot-container">
    <!-- Chatbot Trigger Button -->
    <div class="kw-chatbot-trigger">
        <div class="kw-chatbot-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
        </div>
        <span class="kw-notification-badge"></span>
    </div>
    
    <!-- Chat Window -->
    <div class="kw-chatbot-window">
        <div class="kw-chat-header">
            <div class="kw-agent-info">
                <div class="kw-avatar">
                    <span>KW</span>
                </div>
                <div class="kw-agent-details">
                    <h4>KaajWala Support</h4>
                    <p class="kw-status online">Online</p>
                </div>
            </div>
            <div class="kw-chat-controls">
                <button class="kw-minimize-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
                <button class="kw-close-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
        
        <div class="kw-chat-messages">
            <!-- Initial greeting will be added by JavaScript -->
        </div>
        
        <div class="kw-chat-footer">
            <div class="kw-quick-actions">
                <button class="kw-quick-action-btn" data-action="services">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        <path d="M2 10h20M7 15h1m4 0h1m4 0h1"></path>
                    </svg>
                    <span>Services</span>
                </button>
                <button class="kw-quick-action-btn" data-action="booking">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <span>Book</span>
                </button>
                <button class="kw-quick-action-btn" data-action="emergency">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                        <line x1="12" y1="9" x2="12" y2="13"></line>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                    <span>Emergency</span>
                </button>
            </div>
            <div class="kw-input-container">
                <input type="text" placeholder="Type your message..." class="kw-chat-input">
                <button class="kw-send-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="22" y1="2" x2="11" y2="13"></line>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    .kw-chatbot-container {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 9999;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    }
    
    .kw-chatbot-trigger {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        cursor: pointer;
        box-shadow: 0 4px 20px rgba(79, 70, 229, 0.3);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }
    
    .kw-chatbot-trigger:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 25px rgba(79, 70, 229, 0.4);
    }
    
    .kw-notification-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background: #ef4444;
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        font-size: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        display: none;
    }
    
    .kw-chatbot-window {
        width: 380px;
        height: 500px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        position: absolute;
        bottom: 80px;
        right: 0;
        display: none;
        flex-direction: column;
        overflow: hidden;
        border: 1px solid #e5e7eb;
    }
    
    .kw-chatbot-active .kw-chatbot-window {
        display: flex;
        animation: kw-fadeInUp 0.3s ease-out;
    }
    
    @keyframes kw-fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .kw-chat-header {
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
        color: white;
        padding: 16px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .kw-agent-info {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .kw-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #6366f1;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 16px;
    }
    
    .kw-agent-details h4 {
        margin: 0;
        font-size: 15px;
        font-weight: 600;
    }
    
    .kw-status {
        margin: 0;
        font-size: 12px;
        opacity: 0.9;
        display: flex;
        align-items: center;
        gap: 4px;
    }
    
    .kw-status.online::before {
        content: '';
        display: inline-block;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #10b981;
    }
    
    .kw-chat-controls {
        display: flex;
        gap: 8px;
    }
    
    .kw-chat-controls button {
        background: rgba(255, 255, 255, 0.2);
        border: none;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        color: white;
        cursor: pointer;
        transition: background 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .kw-chat-controls button:hover {
        background: rgba(255, 255, 255, 0.3);
    }
    
    .kw-chat-messages {
        flex: 1;
        padding: 16px;
        overflow-y: auto;
        background: #f9fafb;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }
    
    .kw-message {
        max-width: 80%;
        padding: 12px 16px;
        border-radius: 12px;
        font-size: 14px;
        line-height: 1.5;
        position: relative;
    }
    
    .kw-bot-message {
        background: white;
        border: 1px solid #e5e7eb;
        align-self: flex-start;
        border-bottom-left-radius: 4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }
    
    .kw-user-message {
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
        color: white;
        align-self: flex-end;
        border-bottom-right-radius: 4px;
    }
    
    .kw-message-time {
        font-size: 11px;
        color: #6b7280;
        margin-top: 6px;
        text-align: right;
    }
    
    .kw-quick-actions {
        display: flex;
        gap: 8px;
        padding: 12px 16px 0;
        border-top: 1px solid #e5e7eb;
    }
    
    .kw-quick-action-btn {
        background: white;
        border: 1px solid #e5e7eb;
        color: #4f46e5;
        border-radius: 20px;
        padding: 8px 12px;
        font-size: 13px;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        gap: 6px;
        font-weight: 500;
    }
    
    .kw-quick-action-btn:hover {
        background: #f5f3ff;
        border-color: #ddd6fe;
    }
    
    .kw-quick-action-btn svg {
        flex-shrink: 0;
    }
    
    .kw-input-container {
        display: flex;
        padding: 12px 16px 16px;
        gap: 10px;
    }
    
    .kw-chat-input {
        flex: 1;
        padding: 12px 16px;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        outline: none;
        font-size: 14px;
        transition: border-color 0.2s;
        background: white;
    }
    
    .kw-chat-input:focus {
        border-color: #a5b4fc;
        box-shadow: 0 0 0 3px rgba(199, 210, 254, 0.5);
    }
    
    .kw-send-btn {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
        color: white;
        border: none;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .kw-send-btn:hover {
        background: linear-gradient(135deg, #4338ca, #6d28d9);
    }
    
    .kw-typing-indicator {
        display: flex;
        gap: 6px;
        padding: 12px 16px;
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        width: fit-content;
        margin-bottom: 12px;
        border-bottom-left-radius: 4px;
    }
    
    .kw-typing-dot {
        width: 8px;
        height: 8px;
        background: #9ca3af;
        border-radius: 50%;
        animation: kw-typing 1.4s infinite ease-in-out;
    }
    
    .kw-typing-dot:nth-child(1) {
        animation-delay: 0s;
    }
    
    .kw-typing-dot:nth-child(2) {
        animation-delay: 0.2s;
    }
    
    .kw-typing-dot:nth-child(3) {
        animation-delay: 0.4s;
    }
    
    @keyframes kw-typing {
        0%, 60%, 100% {
            transform: translateY(0);
            opacity: 0.6;
        }
        30% {
            transform: translateY(-4px);
            opacity: 1;
        }
    }
    
    .kw-service-categories {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-top: 12px;
    }
    
    .kw-service-category {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        padding: 12px;
        cursor: pointer;
        transition: all 0.2s;
        text-align: center;
        font-weight: 500;
        color: #4f46e5;
    }
    
    .kw-service-category:hover {
        background: #f5f3ff;
        border-color: #ddd6fe;
    }
    
    .kw-service-list {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-top: 12px;
    }
    
    .kw-service-item {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        padding: 12px;
        cursor: pointer;
        transition: all 0.2s;
    }
    
    .kw-service-item:hover {
        background: #f5f3ff;
        border-color: #ddd6fe;
    }
    
    .kw-service-detail {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        padding: 16px;
        margin-top: 12px;
    }
    
    .kw-service-name {
        font-weight: 600;
        color: #4f46e5;
        margin-bottom: 6px;
        font-size: 15px;
    }
    
    .kw-service-description {
        color: #6b7280;
        margin-bottom: 10px;
        font-size: 14px;
        line-height: 1.5;
    }
    
    .kw-service-price {
        color: #4f46e5;
        font-weight: 600;
        margin-bottom: 12px;
        font-size: 14px;
    }
    
    .kw-back-button {
        background: white;
        border: 1px solid #e5e7eb;
        color: #4f46e5;
        border-radius: 8px;
        padding: 8px 12px;
        font-size: 13px;
        cursor: pointer;
        margin-top: 12px;
        transition: all 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        font-weight: 500;
    }
    
    .kw-back-button:hover {
        background: #f5f3ff;
        border-color: #ddd6fe;
    }
    
    .kw-book-button {
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
        color: white;
        border: none;
        border-radius: 8px;
        padding: 10px 16px;
        font-size: 14px;
        cursor: pointer;
        margin-top: 12px;
        display: inline-block;
        font-weight: 500;
        transition: all 0.2s;
    }
    
    .kw-book-button:hover {
        background: linear-gradient(135deg, #4338ca, #6d28d9);
    }
    
    .kw-emergency-contact {
        color: #ef4444;
        font-weight: 600;
        font-size: 14px;
        margin-top: 8px;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatbot = document.querySelector('.kw-chatbot-container');
    const trigger = document.querySelector('.kw-chatbot-trigger');
    const closeBtn = document.querySelector('.kw-close-btn');
    const minimizeBtn = document.querySelector('.kw-minimize-btn');
    const chatInput = document.querySelector('.kw-chat-input');
    const sendBtn = document.querySelector('.kw-send-btn');
    const chatMessages = document.querySelector('.kw-chat-messages');
    const notificationBadge = document.querySelector('.kw-notification-badge');
    
    let unreadMessages = 0;
    let isTyping = false;
    let lastAction = null;
    const ACTION_COOLDOWN = 500;
    
    // Service database organized by categories
    const serviceDB = {
        categories: [
            "Home Services",
            "Technical Services",
            "Personal Services",
            "Specialized Services"
        ],
        
        services: {
            "Home Services": [
                { name: "Electrician", description: "Expert electrical repair and installation services", price: "৳500-৳1500/hour" },
                { name: "Plumber", description: "From leaky faucets to full pipe installations", price: "৳400-৳1200/hour" },
                { name: "Cleaner", description: "Deep cleaning, regular house cleaning services", price: "৳300-৳800/hour" },
                { name: "Painter", description: "Interior and exterior wall painting", price: "৳600-৳2000/day" },
                { name: "Mason", description: "Brickwork, plastering, and concrete repair", price: "৳800-৳2500/day" },
                { name: "Carpenter", description: "Custom furniture, repairs, and woodwork", price: "৳500-৳800/day" }
            ],
            "Technical Services": [
                { name: "AC Technician", description: "AC installation, servicing, and gas refilling", price: "৳800-৳2500/service" },
                { name: "Refrigerator Repair", description: "Professional diagnosis and repair", price: "৳500-৳1500/service" },
                { name: "Internet Technician", description: "Router installation and broadband setup", price: "৳400-৳1000/service" },
                { name: "Computer Repair", description: "Fix slow PCs and hardware issues", price: "৳300-৳1200/service" },
                { name: "Printer Repair", description: "Maintenance for all printer brands", price: "৳400-৳1500/service" },
                { name: "CCTV Technician", description: "Security camera installation", price: "৳1000-৳5000/service" }
            ],
            "Personal Services": [
                { name: "Cook", description: "Experienced cooks for daily meals", price: "৳800-৳2000/day" },
                { name: "Housemaid", description: "Domestic help for cleaning", price: "৳500-৳1500/day" },
                { name: "Driver", description: "Personal or corporate drivers", price: "৳1000-৳3000/day" },
                { name: "Tailor", description: "Custom tailoring and alterations", price: "৳200-৳1000/item" },
                { name: "Beautician", description: "Facials, waxing at home", price: "৳500-৳2000/service" },
                { name: "Home Nurse", description: "Medical care at home", price: "৳1000-৳3000/day" }
            ],
            "Specialized Services": [
                { name: "Security Guard", description: "Licensed security personnel", price: "৳800-৳2500/day" },
                { name: "Event Organizer", description: "Weddings and corporate events", price: "৳5000-৳50000/event" },
                { name: "Photographer", description: "Professional photography", price: "৳2000-৳10000/event" },
                { name: "Makeup Artist", description: "Bridal and party makeup", price: "৳1000-৳5000/service" },
                { name: "Emergency Repairs", description: "Urgent home repairs", price: "৳1000-৳5000/service", emergency: true },
                { name: "Welding Specialist", description: "Metal fabrication jobs", price: "৳800-৳3000/job" }
            ]
        },
        
        commonQuestions: {
            "hi": "Hello! Welcome to KaajWala. How can I assist you today?",
            "hello": "Hello! Looking for professional services?",
            "thanks": "You're welcome! Let me know if you need anything else.",
            "bye": "Thank you for using KaajWala. Stay safe!",
            "urgent": "For emergency services, please call our hotline at <span class='kw-emergency-contact'>09678-787878</span>",
            "price": "Here are our service categories with pricing:",
            "book": "To book a service, please visit our website or call <span class='kw-emergency-contact'>09612-121212</span>",
            "payment": "We accept bKash, Nagad, credit cards, and cash on service completion."
        }
    };

    // Initialize chat
    function initChat() {
        addBotMessage("Welcome to KaajWala! I'm here to help you find trusted professionals. How can I assist you today?");
        showQuickReplies();
    }

    // Toggle chat window
    trigger.addEventListener('click', function() {
        chatbot.classList.toggle('kw-chatbot-active');
        if (chatbot.classList.contains('kw-chatbot-active')) {
            unreadMessages = 0;
            updateNotificationBadge();
        }
    });
    
    // Close chat
    closeBtn.addEventListener('click', function() {
        chatbot.classList.remove('kw-chatbot-active');
    });
    
    // Minimize chat
    minimizeBtn.addEventListener('click', function() {
        chatbot.classList.remove('kw-chatbot-active');
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
                const matchedService = Object.values(serviceDB.services).flat().find(service => 
                    input.includes(service.name.toLowerCase()));
                
                if (matchedService) {
                    response = generateServiceResponse(matchedService);
                } else if (input.includes('service') || input.includes('help')) {
                    response = showServiceCategories();
                } else if (input.includes('book') || input.includes('hire')) {
                    response = "To book a service:<br>1. Visit our website or app<br>2. Select your needed service<br>3. Choose a provider<br>4. Confirm booking details<br><br>Or call our booking hotline: <span class='kw-emergency-contact'>09612-121212</span>";
                } else if (input.includes('emergency')) {
                    response = "For emergency services, please call our 24/7 hotline at <span class='kw-emergency-contact'>09678-787878</span> or visit our Emergency Services section.";
                } else {
                    response = "I'm sorry, I didn't understand. You can ask about:<br>- Our services<br>- Booking process<br>- Service rates<br>- Emergency contacts<br>Or click the quick options below.";
                }
            }
            
            addBotMessage(response);
            showQuickReplies();
        }, 1000);
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
    
    // Show service categories
    function showServiceCategories() {
        let response = `<strong>Service Categories</strong><br>Select a category to browse services:`;
        response += `<div class="kw-service-categories">`;
        
        serviceDB.categories.forEach(category => {
            response += `<div class="kw-service-category" onclick="handleServiceCategory('${category}')">${category}</div>`;
        });
        
        response += `</div>`;
        return response;
    }
    
    // Show services in a category
    window.handleServiceCategory = function(category) {
        showTypingIndicator();
        setTimeout(() => {
            hideTypingIndicator();
            
            let response = `<strong>${category}</strong><br>`;
            response += `<div class="kw-service-list">`;
            
            serviceDB.services[category].forEach(service => {
                response += `
                    <div class="kw-service-item" onclick="handleServiceSelection('${category}', '${service.name}')">
                        <div class="kw-service-name">${service.name}</div>
                        <div class="kw-service-price">${service.price}</div>
                    </div>
                `;
            });
            
            response += `</div>`;
            response += `<button class="kw-back-button" onclick="showServiceCategories()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg>
                            Back to Categories
                         </button>`;
            
            addBotMessage(response);
        }, 800);
    }
    
    // Show service details
    window.handleServiceSelection = function(category, serviceName) {
        showTypingIndicator();
        setTimeout(() => {
            hideTypingIndicator();
            
            const categoryServices = serviceDB.services[category];
            const service = categoryServices.find(s => s.name === serviceName);
            
            let response = `
                <div class="kw-service-detail">
                    <div class="kw-service-name">${service.name}</div>
                    <div class="kw-service-description">${service.description}</div>
                    <div class="kw-service-price">Price: ${service.price}</div>
                    ${service.emergency ? 
                      `<div class="kw-emergency-contact">Emergency service available: Call 09678-787878</div>` : ''}
                    <button class="kw-book-button" onclick="handleBookService('${service.name}')">
                        Book This Service
                    </button>
                </div>
                <button class="kw-back-button" onclick="handleServiceCategory('${category}')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                    Back to ${category}
                </button>
            `;
            
            addBotMessage(response);
        }, 800);
    }
    
    // Handle book service
    window.handleBookService = function(serviceName) {
        showTypingIndicator();
        setTimeout(() => {
            hideTypingIndicator();
            addBotMessage(`
                To book <strong>${serviceName}</strong>:<br><br>
                1. Visit our website or app<br>
                2. Select "${serviceName}" service<br>
                3. Choose your preferred provider<br>
                4. Confirm booking details<br><br>
                Or call our booking hotline: <span class="kw-emergency-contact">09612-121212</span>
            `);
            showQuickReplies();
        }, 800);
    }
    
    // Show quick replies
    function showQuickReplies() {
        const quickReplies = `
            <div class="kw-quick-actions">
                <button class="kw-quick-action-btn" data-action="services">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        <path d="M2 10h20M7 15h1m4 0h1m4 0h1"></path>
                    </svg>
                    <span>Services</span>
                </button>
                <button class="kw-quick-action-btn" data-action="booking">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <span>Book</span>
                </button>
                <button class="kw-quick-action-btn" data-action="emergency">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                        <line x1="12" y1="9" x2="12" y2="13"></line>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                    <span>Emergency</span>
                </button>
            </div>
        `;
        
        setTimeout(() => {
            chatMessages.insertAdjacentHTML('beforeend', quickReplies);
            
            document.querySelectorAll('.kw-quick-action-btn').forEach(button => {
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
        const now = Date.now();
        
        if (lastAction && lastAction.action === action && (now - lastAction.time) < ACTION_COOLDOWN) {
            return;
        }
        
        lastAction = { action: action, time: now };
        
        let response = "";
        switch(action) {
            case "services":
                response = showServiceCategories();
                break;
            case "booking":
                response = "To book a service:<br>1. Visit our website or app<br>2. Select your needed service<br>3. Choose a provider<br>4. Confirm booking details<br><br>Or call our booking hotline: <span class='kw-emergency-contact'>09612-121212</span>";
                break;
            case "emergency":
                response = "For emergency services, please call our 24/7 hotline at <span class='kw-emergency-contact'>09678-787878</span>";
                break;
        }
        
        showTypingIndicator();
        setTimeout(() => {
            hideTypingIndicator();
            addBotMessage(response);
            showQuickReplies();
        }, 800);
    }
    
    // Add bot message
    function addBotMessage(text) {
        const now = new Date();
        const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        
        const messageDiv = document.createElement('div');
        messageDiv.className = 'kw-message kw-bot-message';
        messageDiv.innerHTML = `
            ${text}
            <div class="kw-message-time">${timeString}</div>
        `;
        
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
    
    // Add user message
    function addUserMessage(text) {
        const now = new Date();
        const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        
        const messageDiv = document.createElement('div');
        messageDiv.className = 'kw-message kw-user-message';
        messageDiv.innerHTML = `
            ${text}
            <div class="kw-message-time">${timeString}</div>
        `;
        
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
        
        if (!chatbot.classList.contains('kw-chatbot-active')) {
            unreadMessages++;
            updateNotificationBadge();
        }
    }
    
    // Show typing indicator
    function showTypingIndicator() {
        isTyping = true;
        
        const typingDiv = document.createElement('div');
        typingDiv.className = 'kw-typing-indicator';
        typingDiv.innerHTML = `
            <div class="kw-typing-dot"></div>
            <div class="kw-typing-dot"></div>
            <div class="kw-typing-dot"></div>
        `;
        
        chatMessages.appendChild(typingDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
    
    // Hide typing indicator
    function hideTypingIndicator() {
        isTyping = false;
        const indicators = document.querySelectorAll('.kw-typing-indicator');
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