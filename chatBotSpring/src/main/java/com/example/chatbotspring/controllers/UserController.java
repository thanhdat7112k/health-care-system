package com.example.chatbotspring.controllers;

import com.example.chatbotspring.data.entities.UserAccount;
import com.example.chatbotspring.data.repository.UserAccountRepository;
import com.example.chatbotspring.services.LoginService;
import lombok.AllArgsConstructor;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("/api/")
@CrossOrigin("*")
@AllArgsConstructor
public class UserController {
    UserAccountRepository userAccountRepository;

    private LoginService loginService;
    @PostMapping("/signup")
    public ResponseEntity<?> registerUser(@RequestBody UserAccount userAccount){
        if(userAccountRepository.existsByUsername(userAccount.getUsername())) {
            return ResponseEntity.badRequest().body("Error: Username is already taken!");
        }
        if(userAccountRepository.existsByEmail(userAccount.getEmail())) {
            return ResponseEntity.badRequest().body("Error: Email is already in use!");
        }

        // tao moi tai khoan
        userAccount.setRole("user");
//        userAccountRepository.save(userAccount);
        return ResponseEntity.ok("Create account success");
    }
    // xu ly dang nhap
    @PostMapping("/login")
    public ResponseEntity<UserAccount> loginUser(@RequestBody UserAccount userInfo) {
        System.out.println(userInfo.getUsername());
        System.out.println(userInfo.getPassword());

//        if (userAccountRepository.findByUsername(userInfo.getUsername())) {
//            return ResponseEntity.badRequest().body("Tai khoan khong ton tai!");
//        }
//        if(!userAccountRepository.findByUsername(userInfo.getUsername()) && userAccountRepository.findByPassword(userInfo.getPassword())) {
//            return ResponseEntity.badRequest().body("Mat khau khong chinh xac");
//        }
        return ResponseEntity.ok(loginService.loginCheck(userInfo.getUsername(), userInfo.getPassword()));
    }

}
