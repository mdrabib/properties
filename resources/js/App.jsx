
import React from 'react';
import { createRoot } from 'react-dom/client';
import {BrowserRouter as Router,Routes,Route,IndexRoute} from "react-router-dom";
import Home from './Components/Content/Home';
import PropertyPage from './Components/Content/Property/PropertyPage';
import Footer from './Components/Footer/Footer';
import FooterSection from './Components/Footer/FooterSection';
import Header from './Components/Header';
import Layout from './Components/Layout';
import Properies from './Properties';

// import Layout from './Components/Layout';
// import Main from './Components/Main';

export default function App(){
    return(
        <>
            <Header />
          <Routes>
            <Route path='/home' element={<Home/>}/>
            <Route path='/property' element={<PropertyPage/>}/>

          </Routes>
          <FooterSection/>
            <Footer/>
        </>
    );
}

if(document.getElementById('root')){
    createRoot(document.getElementById('root')).render(<Router><App/></Router>)
}