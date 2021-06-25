package com.example.demo;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class ContentController {

    @GetMapping("/contact")
    public String getContact(Model model) {
        // this String "contact" will be translated by Spring to "src/main/resources/templates/contact.html"
        return "contact";
    }

}
