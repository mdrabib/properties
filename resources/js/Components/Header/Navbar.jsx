import React from "react";
import {Link} from "react-router-dom";

const Navbar = () => {
    return (
        <nav className="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div className="container">
      <button className="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a className="navbar-brand text-brand" href="index.html">Estate<span className="color-b">Agency</span></a>
      <button type="button" className="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span className="fa fa-search" aria-hidden="true"></span>
      </button>
      <div className="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul className="navbar-nav">
          <li className="nav-item">
            <Link to="/home">
              <a className="nav-link active">Home</a>
            </Link>
          </li>
          <li className="nav-item">
            <Link to="/about">
                <a className="nav-link">About</a>
            </Link>
          </li>
          <li className="nav-item">
            <Link to="/property">
              <a className="nav-link">Property</a>
            </Link>
          </li>
          <li className="nav-item">
            <Link to="/blog">
              <a className="nav-link">Blog</a>
            </Link>
          </li>
          <li className="nav-item">
            <Link to="/contact">
              <a className="nav-link">Contact</a>
            </Link>
          </li>
        </ul>
      </div>
      <button type="button" className="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span className="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
    );
};

export default Navbar;
