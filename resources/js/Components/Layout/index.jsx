import React from "react";
import Footer from "../Footer/Footer";
import FooterSection from "../Footer/FooterSection";
import Header from "../Header";

const Layout = ({ children }) => {
    return (
        <div className="content">
           { children }
        </div>
    );
};

export default Layout;
