package com.example.demo;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class ContentController {

    @GetMapping("/content")
    public String content(@RequestParam(name="content", required=false, defaultValue="Empty") String content, Model model) {
        model.addAttribute("content", content);
        return "content";
    }

}
