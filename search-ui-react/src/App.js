import './App.css';
import { Routes, Route } from 'react-router-dom'
import Login from './Login';
import Search from './Search';
import History from './History';
import Register from './Register';


function App() {
  return (
    <Routes>
      <Route path='/' element={<Login/>} />
      <Route path='/search' element={<Search/>} />
      <Route path='/history' element={<History/>}/>
      <Route path='/register' element={<Register/>}/>

    </Routes>

  );
}


export default App;
