import React from 'react'
import { ReactComponent as LogoSVG } from "../../images/logo.svg";
import { useNavigate } from 'react-router-dom';
import logoutUser from '../../api/Logout';





const Navbar = () => {
    const navigate = useNavigate();
  
    const handleLogout = async () => {
        try {
          const token = localStorage.getItem("token");
          await logoutUser(token);
          navigate('/');
        } catch (error) {
          console.error('Logout failed', error);
        }
      };
  return (
    <nav className="sticky top-0 w-1/6 h-screen border border-b-1 z-10">
        <div className="container max-w-5xl p-2	">
            <div className="flex flex-col py-1 itens-center">
                <div className="pt-[3rem] px-[1.5rem] pb-[4rem]">
                    <LogoSVG src="logo.svg" alt="logo" width={120} />
                </div>
                
                <div className="">
                    {/* <FontAwesomeIcon icon={'magnifying-glass'} className=''/> */}
                    <input type="text" name="" id="" className=' border-black border rounded w-full'/>
                </div>
                
                <div className="">
                    edit profile
                </div>

                <div className="">
                    create post
                </div>
                
                <button className="" onClick={handleLogout}>
                    logout
                </button>
                
            </div>
        </div>
    </nav>
  )
}

export default Navbar