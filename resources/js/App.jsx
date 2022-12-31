
import React from 'react';
import { createRoot } from 'react-dom/client';
import {BrowserRouter as Router,Routes,Route} from "react-router-dom"
import Home from './Components/Content/Homepage';
import Footer from './Components/Footer/Footer';
import FooterSection from './Components/Footer/FooterSection';
import Header from './Components/Header';
import Layout from './Components/Layout';
// import Layout from './Components/Layout';
// import Main from './Components/Main';

export default function App(){
    return(
        <Router>
            <Header />            
          <Routes>
            <Route path='/react' element={<Layout> <Home/></Layout>}/>
          </Routes>
          <FooterSection/>
            <Footer/>
        </Router>
    );
}

if(document.getElementById('root')){
    createRoot(document.getElementById('root')).render(<App />)
}