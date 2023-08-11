import axios from 'axios';

const apiUrl = 'http://127.0.0.1:8000/api/user/logout';

const logoutUser = async (token) => {
  try {
    const response = await axios.post(apiUrl, {}, {
      headers: {
        Authorization: `Bearer ${token}` // Include the token in the Authorization header
      }
    });
    
    // Check if the response indicates a successful logout
    if (response.status === 200) {
      localStorage.removeItem("token"); // Remove the token only if logout was successful
      return response;
    } else {
      throw new Error('Logout failed');
    }
  } catch (error) {
    throw new Error('Logout failed');
  }
};

export default logoutUser;