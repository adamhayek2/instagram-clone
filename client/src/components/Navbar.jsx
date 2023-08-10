import React from 'react'
import { ReactComponent as LogoSVG } from "../images/logo.svg";

const Navbar = () => {
  return (
    <nav className="sticky top-0 w-1/6 h-screen border border-b-1 z-10">
        <div className="container max-w-5xl p-2	">
            <div className="flex flex-col py-1 itens-center">
                <div className="basis-1/3 pt-[3rem] px-[1.5rem] pb-[4rem]">
                    <LogoSVG src="logo.svg" alt="logo" width={120} />
                </div>
                
                <div className="basis-1/3">
                    {/* <FontAwesomeIcon icon={'magnifying-glass'} className=''/> */}
                    <input type="text" name="" id="" className=' border-black border rounded w-full'/>
                </div>
                
                <div className="basis-1/3">
                    {/* <FontAwesomeIcon icon="fa-brands fa-profile" /> */}
                </div>
                
            </div>
        </div>
    </nav>
  )
}

export default Navbar