<!-- resources/views/components/chatbot.blade.php -->

<!-- Floating Chat Bot -->
<div class="chatbot-container">
  <div class="chatbot-icon">
    <i class="fas fa-comment-dots"></i>
    <span class="chatbot-notification"></span>
  </div>
  <div class="chatbot-window">
    <div class="chatbot-header">
      <div class="chatbot-avatar">
        <img src="{{ asset('images/chatbot-avatar.png') }}" alt="KaajWala Support">
      </div>
      <div class="chatbot-info">
        <h4>KaajWala Support</h4>
        <p class="chatbot-status">Online</p>
      </div>
      <div class="chatbot-actions">
        <button class="chatbot-minimize"><i class="fas fa-minus"></i></button>
        <button class="chatbot-close"><i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="chatbot-messages">
      <div class="chatbot-message chatbot-response">
        <div class="message-content">
          <p>Hello! I'm your KaajWala assistant. How can I help you today?</p>
        </div>
        <div class="message-time">Just now</div>
      </div>
      <div class="chatbot-message chatbot-response">
        <div class="message-content">
          <p>Here are some quick options:</p>
          <div class="quick-options">
            <button class="quick-option" data-option="services">Browse Services</button>
            <button class="quick-option" data-option="booking">Help with Booking</button>
            <button class="quick-option" data-option="payment">Payment Issues</button>
            <button class="quick-option" data-option="worker">Find a Worker</button>
          </div>
        </div>
      </div>
    </div>
    <div class="chatbot-input-area">
      <div class="chatbot-attachments">
        <button class="chatbot-attach" title="Attach file"><i class="fas fa-paperclip"></i></button>
      </div>
      <div class="chatbot-input">
        <input type="text" placeholder="Type your message..." id="chatbot-input-field">
        <button class="chatbot-send"><i class="fas fa-paper-plane"></i></button>
      </div>
    </div>
  </div>
</div>

<!-- Chat Bot Styles -->
<style>
  .chatbot-container {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 9999;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  
  .chatbot-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #f96d00, #ff7e5f);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    cursor: pointer;
    box-shadow: 0 4px 20px rgba(249, 65, 68, 0.4);
    transition: all 0.3s ease;
    position: relative;
  }
  
  .chatbot-icon:hover {
    transform: scale(1.1);
  }
  
  .chatbot-notification {
    position: absolute;
    top: -5px;
    right: -5px;
    width: 20px;
    height: 20px;
    background: #ff4757;
    border-radius: 50%;
    color: white;
    font-size: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    display: none;
  }
  
  .chatbot-window {
    position: absolute;
    bottom: 80px;
    right: 0;
    width: 380px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 30px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    display: none;
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.3s ease;
    height: 500px;
    display: flex;
    flex-direction: column;
  }
  
  .chatbot-container.active .chatbot-window {
    display: flex;
    transform: translateY(0);
    opacity: 1;
  }
  
  .chatbot-header {
    background: linear-gradient(135deg, #f96d00, #ff7e5f);
    color: white;
    padding: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  
  .chatbot-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    background: white;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .chatbot-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .chatbot-info {
    flex: 1;
  }
  
  .chatbot-info h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
  }
  
  .chatbot-status {
    margin: 0;
    font-size: 12px;
    opacity: 0.8;
  }
  
  .chatbot-actions {
    display: flex;
    gap: 5px;
  }
  
  .chatbot-actions button {
    background: rgba(255, 255, 255, 0.2);
    border: none;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    color: white;
    cursor: pointer;
    transition: background 0.2s;
  }
  
  .chatbot-actions button:hover {
    background: rgba(255, 255, 255, 0.3);
  }
  
  .chatbot-messages {
    flex: 1;
    padding: 15px;
    overflow-y: auto;
    background: #f5f5f5;
    display: flex;
    flex-direction: column;
    gap: 15px;
  }
  
  .chatbot-message {
    max-width: 80%;
    display: flex;
    flex-direction: column;
    gap: 5px;
  }
  
  .chatbot-response {
    align-self: flex-start;
  }
  
  .message-content {
    padding: 12px 15px;
    border-radius: 18px;
    font-size: 14px;
    line-height: 1.4;
  }
  
  .chatbot-response .message-content {
    background: white;
    border: 1px solid #eee;
    border-top-left-radius: 5px;
  }
  
  .chatbot-message[data-sender="user"] {
    align-self: flex-end;
  }
  
  .chatbot-message[data-sender="user"] .message-content {
    background: linear-gradient(135deg, #f96d00, #ff7e5f);
    color: white;
    border-top-right-radius: 5px;
  }
  
  .message-time {
    font-size: 11px;
    color: #999;
    padding: 0 5px;
  }
  
  .quick-options {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 10px;
  }
  
  .quick-option {
    background: rgba(249, 109, 0, 0.1);
    border: 1px solid rgba(249, 109, 0, 0.3);
    color: #f96d00;
    border-radius: 20px;
    padding: 6px 12px;
    font-size: 12px;
    cursor: pointer;
    transition: all 0.2s;
  }
  
  .quick-option:hover {
    background: rgba(249, 109, 0, 0.2);
  }
  
  .chatbot-input-area {
    padding: 15px;
    background: white;
    border-top: 1px solid #eee;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
  
  .chatbot-attachments {
    display: flex;
    gap: 10px;
  }
  
  .chatbot-attach {
    background: none;
    border: none;
    color: #666;
    cursor: pointer;
    font-size: 16px;
    transition: color 0.2s;
  }
  
  .chatbot-attach:hover {
    color: #f96d00;
  }
  
  .chatbot-input {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  
  .chatbot-input input {
    flex: 1;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 30px;
    outline: none;
    font-size: 14px;
    transition: border 0.2s;
  }
  
  .chatbot-input input:focus {
    border-color: #f96d00;
  }
  
  .chatbot-send {
    background: #f96d00;
    color: white;
    border: none;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    cursor: pointer;
    transition: background 0.2s;
  }
  
  .chatbot-send:hover {
    background: #e05e00;
  }
  
  /* Typing indicator */
  .typing-indicator {
    display: flex;
    gap: 5px;
    padding: 10px 15px;
    background: white;
    border: 1px solid #eee;
    border-radius: 18px;
    width: fit-content;
    margin-bottom: 15px;
    border-top-left-radius: 5px;
  }
  
  .typing-dot {
    width: 8px;
    height: 8px;
    background: #ccc;
    border-radius: 50%;
    animation: typingAnimation 1.4s infinite ease-in-out;
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
  
  @keyframes typingAnimation {
    0%, 60%, 100% {
      transform: translateY(0);
      opacity: 0.6;
    }
    30% {
      transform: translateY(-5px);
      opacity: 1;
    }
  }
</style>

<!-- Chatbot Script -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const chatbotContainer = document.querySelector('.chatbot-container');
    const chatbotIcon = document.querySelector('.chatbot-icon');
    const chatbotClose = document.querySelector('.chatbot-close');
    const chatbotMinimize = document.querySelector('.chatbot-minimize');
    const chatInput = document.querySelector('#chatbot-input-field');
    const chatSend = document.querySelector('.chatbot-send');
    const chatMessages = document.querySelector('.chatbot-messages');
    const notificationBadge = document.querySelector('.chatbot-notification');
    const quickOptions = document.querySelectorAll('.quick-option');
    
    let isTyping = false;
    let unreadMessages = 0;
    
    // Service database for our responses
    const serviceDB = {
      services: {
        title: "Our Services",
        description: "KaajWala offers the following professional services:",
        items: [
          "Electrician - Wiring, repairs, installations",
          "Plumber - Pipe fixes, installations, maintenance",
          "Cleaner - Home, office, deep cleaning",
          "Mechanic - Car repairs, maintenance",
          "Movers - Furniture relocation, packing",
          "Painter - Interior, exterior painting"
        ],
        action: "You can browse all services on our <a href='/services'>Services Page</a>."
      },
      booking: {
        title: "Booking Help",
        description: "To book a service:",
        steps: [
          "1. Go to the Services page",
          "2. Select your required service",
          "3. Choose a worker based on ratings and availability",
          "4. Select date and time",
          "5. Confirm your booking"
        ],
        action: "Need help with a specific booking? Describe your issue."
      },
      payment: {
        title: "Payment Information",
        description: "We accept:",
        methods: [
          "Credit/Debit Cards",
          "Mobile Payments",
          "Cash on Service Completion"
        ],
        issues: [
          "If payment fails, try again in 5 minutes",
          "For refunds, contact support@kaajwala.com",
          "Always get a payment receipt"
        ]
      },
      worker: {
        title: "Find a Worker",
        description: "How to find the right worker:",
        tips: [
          "Check worker ratings and reviews",
          "View completed jobs in their profile",
          "Look for verified badges",
          "Compare hourly rates"
        ],
        action: "Start your search on our <a href='/select-workers'>Worker Selection</a> page."
      }
    };
    
    // Common questions and responses
    const commonQuestions = {
      "hi": "Hello! How can I assist you with KaajWala today?",
      "hello": "Hi there! What service are you looking for?",
      "thanks": "You're welcome! Is there anything else I can help you with?",
      "thank you": "My pleasure! Let me know if you need anything else.",
      "bye": "Goodbye! Feel free to come back if you have more questions.",
      "how are you": "I'm just a chatbot, but I'm functioning well! How can I help you today?",
      "what can you do": "I can help you find services, book workers, explain payment options, and answer questions about KaajWala. What do you need?",
      "help": "I can assist with service bookings, worker selection, payments, and general questions. What do you need help with?",
      "contact support": "You can reach our support team at support@kaajwala.com or call +1 (555) 123-4567 during business hours."
    };
    
    // Toggle chat window
    chatbotIcon.addEventListener('click', () => {
      chatbotContainer.classList.toggle('active');
      if (chatbotContainer.classList.contains('active')) {
        unreadMessages = 0;
        updateNotificationBadge();
      }
    });
    
    // Close chat
    chatbotClose.addEventListener('click', () => {
      chatbotContainer.classList.remove('active');
    });
    
    // Minimize chat
    chatbotMinimize.addEventListener('click', () => {
      chatbotContainer.classList.remove('active');
    });
    
    // Quick options
    quickOptions.forEach(option => {
      option.addEventListener('click', () => {
        const optionType = option.dataset.option;
        handleQuickOption(optionType);
      });
    });
    
    // Handle quick option selection
    function handleQuickOption(option) {
      if (isTyping) return;
      
      // Add user's quick option selection
      addMessage(`I need help with ${option.replace('-', ' ')}`, 'user');
      
      // Show typing indicator
      showTypingIndicator();
      
      // Generate response after delay
      setTimeout(() => {
        hideTypingIndicator();
        generateResponse(option);
      }, 1500);
    }
    
    // Send message
    function sendMessage() {
      const message = chatInput.value.trim();
      if (message && !isTyping) {
        addMessage(message, 'user');
        chatInput.value = '';
        
        // Show typing indicator
        showTypingIndicator();
        
        // Generate response after delay
        setTimeout(() => {
          hideTypingIndicator();
          generateResponse(message.toLowerCase());
        }, 1500);
      }
    }
    
    // Add message to chat
    function addMessage(text, sender) {
      const now = new Date();
      const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
      
      const messageDiv = document.createElement('div');
      messageDiv.className = `chatbot-message`;
      messageDiv.setAttribute('data-sender', sender);
      
      messageDiv.innerHTML = `
        <div class="message-content">
          <p>${text}</p>
        </div>
        <div class="message-time">${timeString}</div>
      `;
      
      chatMessages.appendChild(messageDiv);
      chatMessages.scrollTop = chatMessages.scrollHeight;
      
      // Update notification badge if chat is closed
      if (!chatbotContainer.classList.contains('active') && sender === 'response') {
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
      const typingIndicators = document.querySelectorAll('.typing-indicator');
      typingIndicators.forEach(indicator => indicator.remove());
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
    
    // Generate response based on input
    function generateResponse(input) {
      let response = '';
      let isCommonQuestion = false;
      
      // Check for common questions first
      for (const [question, answer] of Object.entries(commonQuestions)) {
        if (input.includes(question)) {
          response = answer;
          isCommonQuestion = true;
          break;
        }
      }
      
      // If not a common question, check for services or other options
      if (!isCommonQuestion) {
        if (input.includes('service') || input === 'services') {
          response = formatServiceResponse(serviceDB.services);
        } 
        else if (input.includes('book') || input.includes('booking') || input === 'booking') {
          response = formatServiceResponse(serviceDB.booking);
        } 
        else if (input.includes('pay') || input.includes('payment') || input === 'payment') {
          response = formatServiceResponse(serviceDB.payment);
        } 
        else if (input.includes('worker') || input.includes('labour') || input === 'worker') {
          response = formatServiceResponse(serviceDB.worker);
        } 
        else if (input.includes('electrician')) {
          response = `For electrician services, we have qualified professionals for:<br>
                      - Wiring installations<br>
                      - Electrical repairs<br>
                      - Lighting solutions<br>
                      - Safety inspections<br>
                      <br>You can browse our <a href="/services/electrician">electrician listings</a> to find the right professional.`;
        } 
        else if (input.includes('plumber')) {
          response = `Our plumbing services include:<br>
                      - Pipe repairs<br>
                      - Drain cleaning<br>
                      - Faucet installations<br>
                      - Water heater services<br>
                      <br>Check our <a href="/services/plumber">plumber listings</a> for available professionals.`;
        } 
        else if (input.includes('cleaner')) {
          response = `We offer various cleaning services:<br>
                      - Regular home cleaning<br>
                      - Deep cleaning<br>
                      - Office cleaning<br>
                      - Post-construction cleaning<br>
                      <br>Find available <a href="/services/cleaner">cleaners in your area</a>.`;
        } 
        else {
          // Default response if we don't understand
          response = `I'm not sure I understand. Could you please rephrase or ask about:<br>
                      - Our services<br>
                      - Booking process<br>
                      - Payment options<br>
                      - Finding workers<br>
                      <br>Or type "help" for more options.`;
        }
      }
      
      addMessage(response, 'response');
      
      // Add quick options again if it's not a direct response to a quick option
      if (!['services', 'booking', 'payment', 'worker'].includes(input)) {
        setTimeout(() => {
          addQuickOptions();
        }, 300);
      }
    }
    
    // Format service response
    function formatServiceResponse(service) {
      let response = `<strong>${service.title}</strong><br>${service.description}<br><br>`;
      
      if (service.items) {
        response += service.items.map(item => `• ${item}`).join('<br>');
      }
      if (service.steps) {
        response += service.steps.map(step => `• ${step}`).join('<br>');
      }
      if (service.methods) {
        response += service.methods.map(method => `• ${method}`).join('<br>');
      }
      if (service.issues) {
        response += '<br><br><strong>Common issues:</strong><br>';
        response += service.issues.map(issue => `• ${issue}`).join('<br>');
      }
      if (service.tips) {
        response += '<br><br><strong>Tips:</strong><br>';
        response += service.tips.map(tip => `• ${tip}`).join('<br>');
      }
      if (service.action) {
        response += `<br><br>${service.action}`;
      }
      
      return response;
    }
    
    // Add quick options to chat
    function addQuickOptions() {
      const optionsDiv = document.createElement('div');
      optionsDiv.className = 'chatbot-message chatbot-response';
      
      optionsDiv.innerHTML = `
        <div class="message-content">
          <p>Need help with something else?</p>
          <div class="quick-options">
            <button class="quick-option" data-option="services">Browse Services</button>
            <button class="quick-option" data-option="booking">Help with Booking</button>
            <button class="quick-option" data-option="payment">Payment Issues</button>
            <button class="quick-option" data-option="worker">Find a Worker</button>
          </div>
        </div>
      `;
      
      chatMessages.appendChild(optionsDiv);
      chatMessages.scrollTop = chatMessages.scrollHeight;
      
      // Reattach event listeners to new quick options
      document.querySelectorAll('.quick-option').forEach(option => {
        option.addEventListener('click', () => {
          const optionType = option.dataset.option;
          handleQuickOption(optionType);
        });
      });
    }
    
    // Event listeners
    chatSend.addEventListener('click', sendMessage);
    chatInput.addEventListener('keypress', function(e) {
      if (e.key === 'Enter') sendMessage();
    });
    
    // Initial greeting
    setTimeout(() => {
      addMessage("Welcome to KaajWala! I'm here to help you find services or workers. How can I assist you today?", 'response');
    }, 1000);
  });
</script>