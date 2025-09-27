# Web-Based Conference Day Management System

A comprehensive web application for managing conference day events, participant registration, and session timetables. This system provides an intuitive interface for conference organizers and attendees to manage all aspects of a conference event.

## 🎯 Features

- **User Registration & Authentication**: Secure participant registration and sign-in system
- **Conference Sessions Timetable**: Detailed schedule of all conference sessions with speakers and venues
- **Responsive Design**: Mobile-friendly interface that works across all devices
- **Professional UI**: Clean and modern design with ITUM branding
- **Multi-category Support**: Support for different participant categories (Student, Academic, Professional)
- **Session Management**: Interactive timetable with keynote speeches and technical sessions

## 🚀 Getting Started

### Prerequisites

- Web server with PHP support (Apache/Nginx)
- Modern web browser
- PHP 7.4 or higher (for backend functionality)

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/dilmi1108/WebBasedConferenceDayManagementSystem.git
   ```

2. Navigate to the project directory:
   ```bash
   cd "Web-Based Conference Day Management System"
   ```

3. Set up a local web server or upload files to your hosting provider

4. Access the application through your web browser:
   ```
   http://localhost/index.html
   ```

## 📁 Project Structure

```
Web-Based Conference Day Management System/
├── index.html              # Main landing page
├── register.html           # Registration form page
├── register.css            # Registration page styles
├── register.js             # Registration form validation
├── register.php            # Registration form processing
├── signin.html             # Sign-in page
├── signin.css              # Sign-in page styles
├── signin.js               # Sign-in form validation
├── signin.php              # Sign-in processing
├── session.css             # Session page styles
├── session.html            # Session management page
├── timetable.html          # Conference timetable
├── timetable.css           # Timetable styles
└── README.md               # Project documentation
```

## 🎨 Pages Overview

### Main Page (`index.html`)
- Conference overview and navigation
- Hero section with conference details
- Navigation to registration and sign-in
- Professional branding with ITUM logo

### Registration (`register.html`)
- Comprehensive registration form
- Fields for personal information, university, and participant category
- Session interest selection
- Form validation and PHP processing

### Sign-in (`signin.html`)
- User authentication interface
- Secure login system
- Responsive form design

### Timetable (`timetable.html`)
- Complete conference schedule
- Session details including speakers and venues
- Time-based organization of events
- Featured speakers and keynote sessions

## 🛠️ Technologies Used

- **Frontend**:
  - HTML5
  - CSS3 (with Google Fonts - Poppins)
  - JavaScript (ES6+)
  - Responsive design principles

- **Backend**:
  - PHP 7.4+
  - Form processing and validation
  - Session management

- **Design**:
  - Modern CSS Grid and Flexbox
  - Mobile-first responsive design
  - Professional color scheme
  - Custom styling with external fonts

## 📊 Conference Schedule Highlights

- **09:00 AM - 10:00 AM**: Opening Ceremony & Keynote Speech (Prof. Michael Pecht)
- **10:15 AM - 11:15 AM**: Advances in Communication Systems (Prof. Amin Abbosh)
- **11:30 AM - 12:30 PM**: Robotics & Automation: Future Trends (Prof. Mohan Rajesh Elara)
- Additional technical sessions and networking opportunities

## 🎓 Participant Categories

- **Student**: Undergraduate and graduate students
- **Academic**: Faculty members and researchers
- **Professional**: Industry professionals and experts

## 🔧 Configuration

### Server Configuration
- Ensure PHP is enabled on your web server
- Configure proper file permissions for PHP files
- Set up form processing endpoints

### Customization
- Update conference details in `index.html`
- Modify timetable in `timetable.html`
- Customize styling in respective CSS files
- Update branding and logos as needed

## 🔒 Security Features

- Input sanitization in PHP processing
- Form validation on both client and server side
- XSS prevention measures
- Secure form handling

## 📱 Browser Compatibility

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/new-feature`)
3. Commit your changes (`git commit -am 'Add new feature'`)
4. Push to the branch (`git push origin feature/new-feature`)
5. Create a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Authors

- **dilmi1108** - *Initial work* - [GitHub Profile](https://github.com/dilmi1108)

## 🏢 Organization

Developed for the Institute of Technology, University of Moratuwa (ITUM)

## 📞 Support

For support and questions, please contact:
- GitHub Issues: [Create an Issue](https://github.com/dilmi1108/WebBasedConferenceDayManagementSystem/issues)

## 🔄 Version History

- **v1.0.0** - Initial release with core functionality
  - User registration and authentication
  - Conference timetable management
  - Responsive design implementation
  - PHP backend integration

## 🚀 Future Enhancements

- Database integration for persistent data storage
- Admin panel for conference management
- Email notifications for registered participants
- Payment gateway integration
- QR code generation for tickets
- Real-time session updates
- Feedback and rating system

