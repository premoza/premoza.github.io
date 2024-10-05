import { useState } from 'react'
import './App.css'

function App() {
  const [darkMode, setDarkMode] = useState(false);

  const toggleDarkMode = () => {
    setDarkMode(!darkMode);
  };

  return (
    <main>
      <div className={`big-wrapper ${darkMode ? 'dark' : 'light'}`}>
        <img src={`/assets/shape.png`} alt="Shape" className="shape" />
        <Header />
        <Showcase />
        <BottomArea toggleDarkMode={toggleDarkMode} />
      </div>
    </main>
  );
}

const Header = () => (
  <header>
    <div className="container">
      <div className="logo">
        <img src={`/assets/logo.png`} alt="Logo" />
        <h3>Premoza</h3>
      </div>
      <nav className="links">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Roadmap</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="https://github.com/premoza" className="btn">Github</a></li>
        </ul>
      </nav>
      <div className="hamburger-menu">
        <div className="bar"></div>
      </div>
    </div>
  </header>
);

const Showcase = () => (
  <div className="showcase-area">
    <div className="container">
      <div className="left">
        <div className="big-title">
          <h1>Blockchain powered,</h1>
          <h1>Real estate e-commerce platform.</h1>
        </div>
        <p className="text">
          A cutting-edge real estate e-commerce platform, powered by Solana, allowing users to buy, rent, or sell properties and book hotels worldwide with a single click.
        </p>
       <div className="launchlist-widget" data-key-id="c1VU8y" data-height="180px"></div>
      </div>
      <div className="right">
        <img src={`/assets/person.png`} alt="Person" className="person" />
      </div>
    </div>
  </div>
);

const BottomArea = ({ toggleDarkMode }) => (
  <div className="bottom-area">
    <div className="container">
      <button className="toggle-btn" onClick={toggleDarkMode}>
        <i className="far fa-moon"></i>
        <i className="far fa-sun"></i>
      </button>
    </div>
  </div>
);

export default App;
