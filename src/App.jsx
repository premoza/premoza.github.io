
import Header from "./components/Header/Header";
import Hero from "./components/Hero/Hero";
import Residencies from "./components/Residencies/Residencies";
import "./App.css";
import Value from "./components/Value/Value";
import Contact from "./components/Contact/Contact";
import GetStarted from "./components/GetStarted/GetStarted";
import Footer from "./components/Footer/Footer";

function App() {
  return (
   <div className="app">
    <div>
      <div className="white-gradient"/> 
      <Header/>
    <Hero/>
    </div>
   
    <Companies/>
    <Residencies/>
    <Value/>
   
    <GetStarted/>
    <Footer/>
   </div>
  );
}

export default App;
