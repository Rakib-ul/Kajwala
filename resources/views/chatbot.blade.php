<!-- resources/views/components/chatbot.blade.php -->

<!-- Floating Chat Bot -->
<div class="chatbot-container">
  <div class="chatbot-icon">
    <i class="fas fa-comment-dots"></i>
  </div>
  <div class="chatbot-window">
    <div class="chatbot-header">
      <h4>KaajWala Support</h4>
      <button class="chatbot-close"><i class="fas fa-times"></i></button>
    </div>
    <div class="chatbot-messages">
      <div class="chatbot-message chatbot-response">
        <p>Hello! How can I help you today?</p>
      </div>
    </div>
    <div class="chatbot-input">
      <input type="text" placeholder="Type your message...">
      <button class="chatbot-send"><i class="fas fa-paper-plane"></i></button>
    </div>
  </div>
</div>

<!-- Chat Bot Styles -->
<style>
  .chatbot-container { position: fixed; bottom: 30px; right: 30px; z-index: 9999; }
  .chatbot-icon {
    width: 60px; height: 60px;
    background: linear-gradient(135deg, #f96d00, #ff7e5f);
    border-radius: 50%; display: flex; align-items: center; justify-content: center;
    color: white; font-size: 24px; cursor: pointer;
    box-shadow: 0 4px 20px rgba(249, 65, 68, 0.4);
    transition: all 0.3s ease;
  }
  .chatbot-icon:hover { transform: scale(1.1); }
  .chatbot-window {
    position: absolute; bottom: 80px; right: 0;
    width: 350px; background: white; border-radius: 15px;
    box-shadow: 0 5px 30px rgba(0, 0, 0, 0.2); overflow: hidden;
    display: none; transform: translateY(20px); opacity: 0;
    transition: all 0.3s ease;
  }
  .chatbot-container.active .chatbot-window {
    display: block; transform: translateY(0); opacity: 1;
  }
  .chatbot-header {
    background: linear-gradient(135deg, #f96d00, #ff7e5f);
    color: white; padding: 15px; display: flex; justify-content: space-between; align-items: center;
  }
  .chatbot-header h4 { margin: 0; font-size: 16px; }
  .chatbot-close {
    background: none; border: none; color: white;
    font-size: 16px; cursor: pointer;
  }
  .chatbot-messages {
    height: 300px; padding: 15px; overflow-y: auto; background: #f9f9f9;
  }
  .chatbot-message {
    margin-bottom: 15px; padding: 10px 15px;
    border-radius: 18px; max-width: 80%; font-size: 14px;
  }
  .chatbot-response {
    background: white; border: 1px solid #eee; margin-right: auto;
  }
  .chatbot-input {
    display: flex; padding: 15px; background: white; border-top: 1px solid #eee;
  }
  .chatbot-input input {
    flex: 1; padding: 10px 15px; border: 1px solid #ddd;
    border-radius: 30px; outline: none;
  }
  .chatbot-send {
    background: #f96d00; color: white; border: none;
    width: 40px; height: 40px; border-radius: 50%;
    margin-left: 10px; cursor: pointer;
  }
</style>

<!-- Chatbot Script -->
<script>
  const chatbotContainer = document.querySelector('.chatbot-container');
  const chatbotIcon = document.querySelector('.chatbot-icon');
  const chatbotClose = document.querySelector('.chatbot-close');
  const chatInput = document.querySelector('.chatbot-input input');
  const chatSend = document.querySelector('.chatbot-send');
  const chatMessages = document.querySelector('.chatbot-messages');

  chatbotIcon.addEventListener('click', () => {
    chatbotContainer.classList.toggle('active');
  });

  chatbotClose.addEventListener('click', () => {
    chatbotContainer.classList.remove('active');
  });

  function sendMessage() {
    const message = chatInput.value.trim();
    if (message) {
      const userMsg = document.createElement('div');
      userMsg.className = 'chatbot-message';
      userMsg.style.marginLeft = 'auto';
      userMsg.style.background = 'linear-gradient(135deg, #f96d00, #ff7e5f)';
      userMsg.style.color = 'white';
      userMsg.innerHTML = `<p>${message}</p>`;
      chatMessages.appendChild(userMsg);
      chatInput.value = '';
      chatMessages.scrollTop = chatMessages.scrollHeight;

      setTimeout(() => {
        const responses = [
          "I understand. How can I assist you further?",
          "Our team will get back to you shortly.",
          "You can find more info on our Services page.",
          "Want to talk to support?",
          "Thank you for your message!"
        ];
        const reply = responses[Math.floor(Math.random() * responses.length)];
        const botMsg = document.createElement('div');
        botMsg.className = 'chatbot-message chatbot-response';
        botMsg.innerHTML = `<p>${reply}</p>`;
        chatMessages.appendChild(botMsg);
        chatMessages.scrollTop = chatMessages.scrollHeight;
      }, 1000);
    }
  }

  chatSend.addEventListener('click', sendMessage);
  chatInput.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') sendMessage();
  });
</script>
