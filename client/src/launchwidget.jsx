import React, { useEffect } from 'react';

const LaunchListWidget = () => {
  useEffect(() => {
    // Create script element
    const script = document.createElement('script');
    script.src = "https://getlaunchlist.com/js/widget.js";
    script.defer = true;
    // Append the script to the body
    document.body.appendChild(script);

    // Cleanup the script when component unmounts
    return () => {
      document.body.removeChild(script);
    };
  }, []); // Empty dependency array to ensure it runs once

  return (
    <div 
      className="launchlist-widget" 
      data-key-id="c1VU8y" 
      data-height="180px"
    ></div>
  );
};

export default LaunchListWidget;

