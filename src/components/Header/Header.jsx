import React, { useState } from "react";
import "./Header.css";
import { getMenuStyles } from "../../utils/common";
import { BiMenuAltRight } from "react-icons/bi";
import OutsideClickHandler from "react-outside-click-handler";

const Header = () => {
  const [menuOpened, setMenuOpened] = useState(false);

  return (
    <section className="h-wrapper">
      <div className="flexCenter  innerWidth paddings h-container">
        <img src="./logo.png" alt="logo" width={50} />

        {/* <OutsideClickHandler
          onOutsideClick={() => {
            setMenuOpened(false);
          }}
        > */}
        <div className="flexCenter h-menu"  style={getMenuStyles(menuOpened)}>
          <a href="#residencies">Residency</a>
          <a href="#value">Our Value</a>
          <a href="#contact-us">Contact US</a>
          <a href="#getStarted">Get Started</a>
          <button className="button">
            <a href="#">Launch App</a>
          </button>
        </div>
        {/* </OutsideClickHandler> */}
        <div
          className="menu-icon"
          onClick={() => setMenuOpened((prev) => !prev)}
        >
          <BiMenuAltRight size={30} />
        </div>
      </div>
    </section>
  );
};

export default Header;
