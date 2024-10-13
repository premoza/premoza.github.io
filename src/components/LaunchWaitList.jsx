import React, { useState } from 'react';
import { Component } from 'react';

const LaunchlistForm = () => {
  const [formData, setFormData] = useState({
    name: '',
    email: ''
  });

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

  return (
    <form
      className="launchlist-form"
      action="https://getlaunchlist.com/s/c1VU8y"
      method="POST"
    >
      <h2>Join Waitlist</h2>
      <div className="form-group">
        <input
          name="name"
          type="text"
          value={formData.name}
          onChange={handleChange}
          placeholder="Enter your name"
          className="form-input"
        />
        <input
          name="email"
          type="email"
          value={formData.email}
          onChange={handleChange}
          placeholder="Email requird"
          className="form-input"
        />
        <button type="submit" className="form-button">Sign Up</button>
      </div>
    </form>
  );
};

export default LaunchlistForm;
