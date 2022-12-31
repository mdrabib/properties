import React from 'react'
import Agents from './Agents'
import News from './News'
import Property from './Property'
import Service from './Service'
import Testmonials from './Testmonials'

export default function Home() {
  return (<>
    
  {/* <IntroCarousel/> */}
  <Service/>
  <Property/>
  <Agents/>
  <News/>
  <Testmonials/>

 </> )
}
