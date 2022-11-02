import { useEffect, useRef, useState } from "react";
import axios from "axios";
import './style.css';
import { useNavigate } from "react-router-dom";
import isEmpty from 'validator/lib/isEmpty';

function Login() {
    // const usernameRef = useRef()
    // const passwordRef = useRef()
    const [username, setUsername] = useState('')
    const [password, setPassword] = useState('')
    const [validationMsg, setValidationMsg] = useState({})
    const [responseMess, setResponseMess] = useState()
    const navigate = useNavigate()

    const onChangeUsername = (event) => {
        const value = event.target.value
        setUsername(value)
    }

    const onChangePassword = (event) => {
        const value = event.target.value
        setPassword(value)
    }

    const validateAll = () => {
        const msg = {}
        if (isEmpty(username)) {
            msg.username = "Please input your username"
        }

        if (isEmpty(password)) {
            msg.password = "Please input your password"
        } else if(password.length < 6) {
            msg.password = "Password must be 6 character"
        }

        setValidationMsg(msg)
        if (Object.keys(msg).length > 0) return false
        return true
    }

    const loginRequest = async () => {
        try {
            const isValid = validateAll()
            if (!isValid) return
            else {
                const response = await axios({
                    method: 'post',
                    url: 'http://127.0.0.1:8081/api/login',
                    headers: { 'Content-Type': 'application/json' },
                    data: {
                        username: username,
                        password: password
                    }
                });
                setResponseMess(response.data)
                localStorage.setItem('user', JSON.stringify(response.data))
                if (response.data.role === 'user') {
                    navigate("/search", { replace: true })
                }
            }
        } catch (error) {
            if(error.response) {
                setResponseMess("Username or Password is incorrect")
            } else if(error.request) {
                console.log("Lỗi 2")
            }
            
        }
        // if (username.current && password.current) {
        //     const response = await axios({
        //         method: 'post',
        //         url: 'http://127.0.0.1:8081/api/login',
        //         headers: { 'Content-Type': 'application/json' },
        //         data: {
        //             username: usernameRef.current.value,
        //             password: passwordRef.current.value
        //         }
        //     });
        //     setResponseMess(response.data)
        //     localStorage.setItem('user', JSON.stringify(response.data))
        //     if (response.data.role === 'user') {
        //         navigate("/search", { replace: true })
        //     }
        // }
    }

    useEffect(() => {
        if (localStorage.getItem('user')) {
            navigate("/search", { replace: true })
        }
    }, [])



    return (
        <div className="card">
            <div className="text-center intro">
                {/* <img src="https://i.imgur.com/uNiv4bD.png" width="160">
            <span className="d-block account">Don't have account yet?</span>
            <span className="contact">Contact us at <a href="" className="mail">contact@bbbootstrap.com</a> and <br> we will
                take care of everything</span> */}
            </div>
            <div className="mt-4 text-center">
                <h4>Log In.</h4>
                <div>
                    <span>Don't have an account?</span>
                    <a href="/register" className="text-decoration-none"> Signup here</a>
                </div>
                <div className="mt-3 inputbox">
                    <input type="text" className="form-control" name="" onChange={onChangeUsername} placeholder="Username" />
                    <i className="fa fa-user"></i>
                    <p id="loginForm" className="text-danger">{validationMsg.username}</p>
                </div>
                
                <div className="inputbox">
                    <input type="password" className="form-control" name="" onChange={onChangePassword} placeholder="Password" />
                    <i className="fa fa-lock"></i>
                    <p id="loginForm" className="text-danger">{validationMsg.password || responseMess}</p>
                </div>
                
            </div>
            <div className="d-flex justify-content-between">
                <div className="form-check">
                    <input className="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label className="form-check-label" htmlFor="flexCheckDefault">
                        Keep me Logged in
                    </label>
                </div>
            </div>
            <div className="mt-2">
                <button className="btn btn-primary btn-block text-uppercase" onClick={loginRequest}>Log In</button>
            </div>
        </div>
    )
}

export default Login;